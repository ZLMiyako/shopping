<?php
	namespace app\index\controller;
	use think\Controller;
	use think\facade\Request;
	use think\Db;
	use think\facade\Session;
	class Particulars extends Base
	{
		public function index()
		
		{
			//搜索
			$this->search();
			//购物车物品数量
            $msql = Session::get('msql');
            $u_id = $msql['id'];
            $this->productnum($u_id);
            //获取id
            $id = input('id');
            //根据id查询订单号和其对应的物品
            $order_number = Db::name('adminorder_number')->where(['id'=>$id])->find();
            $this->assign('order_number',$order_number);

            $totle = Db::name('adminorder')->where(['n_id'=>$id])->find();
            $this->assign('totle',$totle);

            $goods = Db::name('adminorder')->where(['n_id'=>$id])->select();
            $this->assign('goods',$goods);

            $user = Db::name('adminsite')->order('id','desc')->where(['u_id'=>$u_id])->find();
            $this->assign('user',$user);
			return view();
		}

	}