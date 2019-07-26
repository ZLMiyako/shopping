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
				if(request()->isPost()){
					//查询对应的商品信息和地址信息
					$goods = Db::name('admints')->where('u_id',$u_id)->select();
					$totle = 0;
					$nums = 0;
					$random = time();
					$res = Db::name('adminorder_number')->insert(['order_number'=>$random]);
					foreach ($goods as $key => $value) {
						$totle += $value['price']*$value['num'];
						$nums += $value['num'];
						$order = Db::name('adminorder')->insert(['g_id'=>$value['id'],'img'=>$value['img'],'title'=>$value['title'],'price'=>$value['price'],'num'=>$value['num'],'u_id'=>$value['u_id'],'order_number'=>$random]);
					}
					$orders = Db::name('adminorder')->where('order_number',$random)->update(['totle'=>$totle,'nums'=>$nums]);
					//halt($orders);
					if($orders){
						$dele = Db::name('admints')->delete(true);
						$rea = Db::name('adminorder')->select();
						foreach ($rea as $key => $value) {
							$delete = Db::name('admingwc')->where('id',$value['g_id'])->delete();
						}
						return $this->return_Msg('1','生成订单成功');
					}else{
						return $this->return_Msg('0','生成订单失败');
					}
				}
			}else{
				$this->productnum();
			}
			$order_number = Db::name('adminorder_number')->select();
			foreach ($order_number as $key => $value) {
				$list[$key] = Db::name('adminorder')->where('order_number',$value['order_number'])->select();
			}
			$this->assign('list',$list);
			return view();
		}

	}