<?php
namespace app\admin\controller;
use think\Db;
use think\helper\Time;
use think\facade\Request;
	class Adminmessage extends Base
	{
		public function index(){
			
			$data = input();
			$db = Db::name('adminmessage')->where('mid',$data['id'])->order('time desc')->find();
			if($db == null){
				
			}
			$this->assign('alist',$db);
			$this->assign('id',$data);
			return $this->fetch();
		}
		
		public function picadd(){
			
			$data = Request::param('id');
			$this->assign('id',$data);
			return $this->fetch();
		}
		
		public function dele(){
			$dele = input();
			Db::table(request()->controller())->where('id',$dele['id'])->delete();
			echo "删除成功";
		}
	}
	

	
	
	?>