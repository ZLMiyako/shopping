<?php
	namespace app\index\controller;
	use think\Controller;
	use think\facade\Request;
	use think\Db;
	use think\facade\Session;
	class Content extends Base
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
			}else{
				$this->productnum();
			}
			//获取url的id	
			$data = Request::param('id');
			if(empty($data)){
				$this->banner('adminproduct','','','list','');
			}else{
				$this->banner('adminproduct','pid',$data,'list','');
			}
			
			
			$this->assign('id',$data);

			return $this->fetch();
		}
		
		public function alist()
		{
			//搜索
			$this->search();
			//获取url的id	
			$data = Request::param('id');
			if(empty($data)){
				$this->banner('adminproduct','','','list','');
			}else{
				$this->banner('adminproduct','pid',$data,'list','');
			}
			return $this->fetch();
		}
		
		public function asearch(){
			$this->search();
			if(request()->isPost()){
				$data = input();		
				$tj = "`title` LIKE '%$data[keyword]%'";
			}else{
				$tj = 1;
			}
			$res = db('adminproduct')->where($tj)->select();
			//$nav = Db::table('adminnav')->order('id','asc')->limit(8)->select();
			
			$this->assign('list',$res);
			$this->assign('keyword',$data);
			return $this->fetch();
		}
	}
	
	
	
	
	
	
	
	
	
	?>