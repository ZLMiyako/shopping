<?php
	namespace app\index\controller;
	use think\Controller;
	use think\facade\Request;
	use think\Db;
	use think\facade\Session;
	class Confirm extends Base
	{
		public function index()
		
		{
			//搜索
			$this->search();
			//购物车物品数量
			if(session('?msql')){
				$msql = Session::get('msql');
				$u_id = $msql['id'];
				$this->productnum($u_id);
				//查询对应的商品信息和地址信息
				$goods = Db::name('admints')->where('u_id',$u_id)->select();
				$totle = 0;
				foreach ($goods as $key => $value) {
					$totle += $value['price']*$value['num'];
				}
				$this->assign('goods',$goods);
				$this->assign('totle',$totle);
				$site = Db::name('adminsite')->order('id','desc')->where('u_id',$u_id)->find();
				$this->assign('site',$site);

			}else{
				$this->productnum();
			}
			return view();
		}

		//清空暂存数据表
		public function dele(){
			$data = input('id');
			if($data==1){
				$dele = Db::name('admints')->delete(true);
			}
		}

		//增加
		public function add(){
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
					//给暂存表中添加数据
					$num = 1;
					$ts = Db::name('admints')->insert(['id'=>1,'u_id'=>$u_id,'p_id'=>$p_id,'img'=>$img,'title'=>$title.'/'.$data,'price'=>$price,'num'=>$num]);
				}
			}
		}
	}