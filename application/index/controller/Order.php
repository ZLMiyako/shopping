<?php
	namespace app\index\controller;
	use think\Controller;
	use think\facade\Request;
	use think\Db;
	use think\facade\Session;
	class Order extends Base
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
					$order = Db::name('adminorder')->insert(['g_id'=>$value['id'],'img'=>$value['img'],'title'=>$value['title'],'price'=>$value['price'],'num'=>$value['num'],'u_id'=>$value['u_id'],'order_number'=>'12345678']);
				}
				//halt($order);


			}else{
				$this->productnum();
			}
			return view();
		}

	}