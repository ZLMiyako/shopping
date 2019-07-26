<?php
namespace app\admin\controller;
use think\Db;
use think\helper\Time;
use think\facade\Request;
	class Adminproduct extends Base
	{
		public function aindex(){
			$data = input();
			//$res = Db::table('adminproduct')->alias('a')->join('adminnav b','a.pid = b.id')->where('pid',$data['pid'])->paginate(5,false,['query' => request()->param(),'type' => 'page\Page','var_page'  => 'page']);
			if($data['pid'] != 0){
			$res = Db::table('adminproduct')->where('pid',$data['pid'])->paginate(5,false,['query' => request()->param(),'type' => 'page\Page','var_page'  => 'page']);
			}else{
			$res = Db::table('adminproduct')->paginate(5,false,['query' => request()->param(),'type' => 'page\Page','var_page'  => 'page']);
			}
			$nav = Db::table('adminnav')->order('id','asc')->limit(8)->select();
			$aanav = Db::table('adminnav')->where('id',$data['pid'])->find();
			$count = $res->total();
			$page = $res->render();
			$this->assign('aaa',$data);
			$this->assign('count',$count);
			$this->assign('page',$page);
			$this->assign('alist',$res);
			$this->assign('aanav',$aanav);
			$this->assign('nav',$nav);
			return $this->fetch('Adminproduct/index');
		}
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	?>