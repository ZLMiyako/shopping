<?php
	namespace app\admin\controller;
	use think\Db;
	use think\captcha\Captcha;
	use think\facade\Session;
	
	class Login extends Base
	{
		public function index(){
			if(session('?msql')){
				$this->redirect('Index/index');
			}else{
				return $this->fetch();
			}
		}
		public function check(){
				//获取前端数据
				$data = input();	
				//实例验证器
				$validate = new \app\common\validate\Adminuser;
				//验证器验证内置条件
				if (!$validate->check($data)) {
	           		return $this->return_Msg('',$validate->getError(),'');
	        	}
				//验证验证码
				if(!captcha_check($data['code'])){	
					return $this->return_Msg(config('msg.code_no'),config('msg.yzm_no'));
				}
				//根据username查询数据库&验证用户
				$checkUser = Db::table('adminuser')->where('username',$data['username'])->find();
				if(!$checkUser){																				
					return $this->return_Msg(config('msg.code_no'),config('msg.user_no'));		//验证用户
				}else if($data['password'] != $checkUser['password']){
					return $this->return_Msg(config('msg.code_no'),config('msg.pswd_no'));		//验证密码
				}else{
						Session::set('msql',$checkUser);						
					return $this->return_Msg(config('msg.code_ok'),config('msg.check_ok'));		//验证通过
						
				}	
				
		}
		public function verify(){
				
				$config = [
				'imagew'	=>80,
				'imageH'	=>40,
			    'fontSize'  =>18,    
			    'length'    =>4,   
			    'useNoise'  =>false,
			    'expire'	=>5,
				];
				$captcha = new Captcha($config);
				return $captcha->entry();
		}
	
		public function initialize() {}//清除控制器方法
	
	
	}
	
	
	
	
	
	
	?>