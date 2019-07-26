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
	}