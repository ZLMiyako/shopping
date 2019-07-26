<?php
namespace app\admin\controller;
use think\Db;
use think\helper\Time;
use think\facade\Request;
	class Admindetails extends Base
	{
		public function index(){
			
			$data = input();
			$db = Db::name('admindetails')->where('did',$data['id'])->find();
			if($db == null){
			}
			$img =explode(' ',trim($db['img'],' '));
			$this->assign('img',$img);
			//$this->assign('img1',$img);
			$this->assign('alist',$db);
			$this->assign('id',$data);
			return $this->fetch();
		}
		
		public function picadd(){
			
			$data = Request::param('id');
			$this->assign('id',$data);
			return $this->fetch();
		}
		
		public function edit(){
			$edit = request()->param();
			$update = db(request()->controller())->where('id',$edit['id'])->find();
			$img =explode(' ',trim($update['img'],' '));
			$this->assign('img',$img);
			$this->assign('update',$update);
			return $this->fetch();
		}
		
		public function dele(){
			$dele = input();
			Db::table(request()->controller())->where('id',$dele['id'])->delete();
			echo "删除成功";
		}
	}
	

	
	
	?>