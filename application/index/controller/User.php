<?php
	namespace app\index\controller;
	use think\Controller;
	use think\facade\Request;
	use think\Db;
	use think\facade\Session;
	class User extends Base
	{
		public function index(){
			//搜索
			$this->search();
			//购物车物品数量
			if(session('?msql')){
				$msql = Session::get('msql');
				$u_id = $msql['id'];
				$this->productnum($u_id);
				$order_number = Db::name('adminorder_number')->select();
				$count = 0;
				foreach ($order_number as $key => $value) {
					$count = ++$count;
				}
				$this->assign('counts',$count);
				
			}else{
				$this->productnum();
			}
			return view();
		}
		//地址管理
		public function addr(){
			$this->search();
			//购物车物品数量
			if(session('?msql')){
				$msql = Session::get('msql');
				$u_id = $msql['id'];
				$this->productnum($u_id);
				
			}else{
				$this->productnum();
			}
			return view();
		}

	}