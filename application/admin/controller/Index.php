<?php
namespace app\admin\controller;
use think\facade\Session;
class Index extends Base
{
    public function index()
	{	
		$res = session('msql');
		$this->assign('auser',$res['username']);
		return $this->fetch();
	}
	public function welcome()
	{
		return $this->fetch();
	}
	public function esc(){
			Session::delete('msql');
			//$this->success('注销成功','Login/index');
			$this->redirect('Login/index');
	}
	
	
	
}
