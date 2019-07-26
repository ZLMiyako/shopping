<?php
	namespace app\index\controller;
	use think\Controller;
	use think\Db;
	use think\captcha\Captcha;
	use think\facade\Session;
	class Base extends controller
	{
		//向前端传传送数据
		public function return_Msg($code = 200,$msg="",$data=[])
		{
			return json(['code'=>$code,'msg'=>$msg,'data'=>$data]);
		}
		
		###########首页方法##################
		//首页影射
		public function index()
		{
				$this->search();
			return $this->fetch();
		}
		
		//退出
		public function esc(){
			Session::delete('msql');
			//$this->success('注销成功','Login/index');
			$this->redirect('login/login');
			
		}
		
		//广告轮播
		public function banner($table,$filed,$condition,$list,$num)
		{
			$db = Db::table($table)->where($filed,$condition)->order('time desc')->limit($num)->select();
			$this->assign($list,$db);
		}
		
		public function seba($table,$condition=[],$list='list',$num='',$field='*')
		{
//			$db = Db::table($table)->where($filed,$condition)->order('time desc')->limit($num)->select();
			$db = Db::name($table)->field($field)->where($condition)->order('time desc')->limit($num)->select();
			$this->assign($list,$db);
		}
		
		//产品分类
		public function product($table,$table1,$condition,$more)
		{
			$list = Db::table($table)->where($condition)->select();
			foreach ($list as $key => $val){
				$list[$key]['m'] = Db::table($table1)->where('pid',$val['id'])->limit(6)->select();
			}
			$this->assign($more,$list);
		}
		
		//搜索
		public function search(){
			//热门搜素
			$db = Db::table('adminproduct')->limit(8)->select();
			$this->assign('search',$db);
			
		}

		//购物车物品数量
		public function productnum($aaa='0'){
			$data = Db::table('admingwc')->where('u_id',$aaa)->select();
			$num['count'] = 0;
			foreach ($data as $key => $value) {
				$num['count'] = $num['count']+$value['num'];
				
			}
			$this->assign('count',$num);
		}

		
		
		
		###########内容方法##################
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	?>