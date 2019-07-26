<?php
namespace app\admin\controller;
use think\Db;
use think\helper\Time;
use think\facade\Request;
	class Adminnews extends Base
	{
		public function anews(){
		
			
			$news = input();
			$alist = Db::table("adminnews")->where('id',$news['id'])->find();
			$this->assign('list',$alist);	
			return $this->fetch();
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	?>