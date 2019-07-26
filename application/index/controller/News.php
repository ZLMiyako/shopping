<?php
	namespace app\index\controller;
	use think\Db;
	use think\facade\Request;
	use think\facade\Session;
	class News extends Base
	{
		
		public function index(){
			$this->search();
			//购物车物品数量
			if(session('?msql')){
				$msql = Session::get('msql');
				$u_id = $msql['id'];
				$this->productnum($u_id);
			}else{
				$this->productnum();
			}
			//轮播
			$res = Db::table('adminpic')->where('bid',2)->select();
			$this->assign('list',$res);
			//新闻
			$ares = Db::table('adminnews')->select();
			$this->assign('news',$ares);
			return	$this->fetch();
		}
		
		public function newscontent(){
			$this->search();
			//新闻详情
			$data = Request::param('id');
			$res = Db::table('adminnews')->where('id',$data)->find();
			$this->assign('news',$res);
			return	$this->fetch();
		}
		
	}
	
	
	
	
	
	
	
	
	
	
