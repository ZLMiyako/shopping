<?php
	namespace app\index\controller;
	use think\Db;
	use think\facade\Request;
	use think\facade\Session;
	class Index extends Base
	{
		//
		public function index(){
			
			//轮播
			$this->banner('adminpic','bid',1,'list',3);
			
			//广告1
			$this->banner('adminpic','bid',2,'rate1',3);
			
			//广告2
			$this->banner('adminpic','bid',2,'rate2',3);
			
			//导航每页显示八个
			$num = Db::name('adminnav')->count();
			$num = ceil($num/8);
			for($i=0;$i<$num;$i++){
				
				$res[$i]['cate'] = Db::name('adminnav')->limit($i*8,8)->select();
			}
			$this->assign('nav',$res);
			
			//新闻滚动
			$this->banner('adminnews','','','news','');
			//$ares = Db::table('adminnews')->select();
			//$this->assign('news',$ares);
			
			//热销分类
			$sell = Db::table('adminproduct')->order('pv desc')->limit(3)->select();
			$this->assign('sell',$sell);
			
			//新品分类
			$newproduct = Db::table('adminproduct')->order('time asc')->limit(6)->select();
			$this->assign('newproduct',$newproduct);
			
			//1 - 3 导航分类
			$this->product('adminnav','adminproduct','id=1 or id=2 or id=3','more1');
			
			//4 - 6 导航分类
			$this->product('adminnav','adminproduct','id=4 or id=5 or id=6','more2');
			
			//7 - 9 导航分类
			$this->product('adminnav','adminproduct','id=7 or id=8 or id=2','more3');
//			$list = Db::table('adminnav')->where('id=6 or id=7 or id=8')->select();
//			foreach ($list as $key => $val){
//				$list[$key]['m'] = Db::table('adminproduct')->where('pid',$val['id'])->limit(6)->select();
//			}
//			$this->assign('more',$list);
			
			//精品推荐
			$this->banner('adminproduct','','','boutique','8');
			
			//搜素
			$this->search();

			//购物车物品数量
			if(session('?msql')){
				$msql = Session::get('msql');
				$u_id = $msql['id'];
				$this->productnum($u_id);
			}else{
				$this->productnum();
			}
			
	
			return	$this->fetch();
		}
		
	}
	
	
	
	
	
	
	
	
	
	
