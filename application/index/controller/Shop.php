<?php
	namespace app\index\controller;
	use think\Controller;
	use think\facade\Request;
	use think\Db;
	use think\facade\Session;
	class Shop extends Base
	{
		public function index()
		
		{
			//搜索
			$this->search();

			//购物车物品数量
			if(session('?msql')){
				//获取u_id
				$msql = Session::get('msql');
				$u_id = $msql['id'];
				$this->productnum($u_id);
				//post方式
				if(request()->isPost()){
					//根据p_id获取title和price
					$id = Request::param('id');
					$class = Db::name('adminproduct')->where('id',$id)->find();
					$title = $class['title'];
					$price = $class['price'];

					//根据$data和p_id获取img与p_id
					$data = Request::param('data');
					$res = Db::name('adminclass')->where(['name'=>$data,'did'=>$id])->find();
					$img = $res['img'];
					$p_id = $res['id'];

					//获取u_id
					$msql = Session::get('msql');
					$u_id = $msql['id'];

					//判断此商品是否已添加
					$check = Db::name('admingwc')->where(['u_id'=>$u_id,'p_id'=>$p_id])->find();
					//存在的情况下进行更新数据
					if(isset($check)){
						$num = $check['num'];
						$num = ++$num;
						$reb = Db::name('admingwc')->where('id',$check['id'])->update(['num'=>$num]);
					}
					//不存在的情况下进行添加
					else{
						$num = 1;
						//将所获取的信息对应存入购物车数据表中
						$reb = Db::name('admingwc')->insert(['u_id'=>$u_id,'p_id'=>$p_id,'img'=>$img,'title'=>$title.'/'.$data,'price'=>$price,'num'=>$num]);
					}
				}
			}else{
				$this->productnum();
			}
			//映射购物车页面
			$msql = Session::get('msql');
			$u_id = $msql['id'];
			$list = Db::name('admingwc')->where('u_id',$u_id)->select();
			$this->assign('list',$list);
			return $this->fetch();
		}

		//删除
		public function delect()
		{
			$dele = request()->param();
			$sql = Db::name('admingwc')->where(['id'=>$dele['id']])->delete();
			if ($sql) {
				return $this->return_Msg(1,'已删除');
			}else{
				return $this->return_Msg(2,'未删除');
			}
		}

		//增加
		public function add()
		{
			$dele = request()->param();
			$find = Db::name('admingwc')->where(['id'=>$dele['id']])->find();
			$num = $find['num'];
			$num = ++$num;
			$sql = Db::name('admingwc')->where(['id'=>$dele['id']])->update(['num'=>$num]);
			if ($sql) {
				return $this->return_Msg(1,'已增加');
			}else{
				return $this->return_Msg(2,'未增加');
			}
		}

		//减少
		public function min()
		{
			$dele = request()->param();
			$find = Db::name('admingwc')->where(['id'=>$dele['id']])->find();
			$num = $find['num'];
			if($num>1){
				$num = --$num;
				$sql = Db::name('admingwc')->where(['id'=>$dele['id']])->update(['num'=>$num]);
				if ($sql) {
					return $this->return_Msg(1,'已减少');
				}else{
					return $this->return_Msg(2,'未减少');
				}
			}
			return $this->return_Msg(3,'不能再减少了');
		}
	}