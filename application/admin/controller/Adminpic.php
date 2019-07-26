<?php
namespace app\admin\controller;
use think\Db;
use think\helper\Time;
use think\facade\Request;
	class Adminpic extends Base
	{
		public function aindex(){
			$data = input();
			//halt($data);
			$res = Db::table('adminpic')->where('bid',$data['bid'])->paginate(5,false,['query' => request()->param(),'type' => 'page\Page','var_page'  => 'page']);
			$count = $res->total();
			$page = $res->render();
			$this->assign('aaa',$data);
			$this->assign('count',$count);
			$this->assign('page',$page);
			$this->assign('alist',$res);
			
			return $this->fetch('Adminpic/index');
		}
		
	}
	

	
	
	?>