<?php
	namespace app\index\controller;
	use think\Controller;
	use think\Db;
	use think\captcha\Captcha;
	use think\facade\Session;
	use think\facade\Request;
	use think\validate;
	class Login extends Base
	{
		//登录
		public function login(){
			
			return	$this->fetch();
		}
		
		//注册
		public function register(){
			
			return	$this->fetch();
		}
		
		//注册到数据库
		public function insert(){
			//接收前端数据

			$data = input();
			$password =md5($data['password']);
			//实例验证器
			$validate = new \app\common\validate\User;
			//验证器验证内置条件
			if (!$validate->scene('mobile')->check($data)) {
           		return $this->return_Msg('0',$validate->getError(),'');
        	}else{
        		//连接验证码数据库
        		$code = Db::name("code")->where("mobile",$data['mobile'])->find();
				//判断验证码数据库
				if($code['code'] != $data['mobilecode']){
					return $this->return_Msg('0','验证输入错误');
				}else if(time()-$code['time'] > 120){
					Db::name("code")->where("mobile",$data['mobile'])->delete();
					return $this->return_Msg('0','验证超时');
				}else{
					//添加到数据库并且判断数据连接是否成功
					try{
						//$data = Request::except(['password_confirm','mobilecode','password'],'post');
						$data = ['mobile'=>$data['mobile'],'password'=>$password,'login_time'=>time()];
						$db=Db::name("web_user")->insert($data);
					}catch(\Exception $e){
						return $this->return_Msg('0',$e->getMessage());
					}
					//判断并返回值
					if($db){
						Db::name("code")->where("mobile",$data['mobile'])->delete();
						
						return $this->return_Msg('1','注册成功');
					}else{
						return $this->return_Msg('0','注册失败');
					}
				}
        	} 	
		}
		
		//获取验证码
		public function sms(){
			//接收前端手机号数据
			$mobile = request()->param('mobile');
			//实例手机验证信息
			$sms = new \Ucpaas(config('sms.option'));
			$appid = config('sms.appid');
			$templateid = config('sms.templateid');
			$param = rand(0001,9999);
			$res = $sms->SendSms($appid,$templateid,$param,$mobile,$uid="");
			//转化验证信息为对象
			$obj = json_decode($res);
			//判断验证数据
			if($obj->msg != "OK"){
				return $this->return_Msg('0',$obj->msg);
			}
			if($obj->msg == "OK"){
				$data = [
					'time' => time(),
					'mobile' => $mobile,
					'code'  => $param,
				];
				$db = Db::name("code")->insert($data);
				return $this->return_Msg('1',"验证码已发送");
			}
		}
		
		//登录验证
		public function logincheck(){
			$data = input();
			$password =md5($data['password']);
			//实例验证器
			$validate = new \app\common\validate\Loginuser;
			//验证用户
			if (!$validate->scene('mobile')->check($data)) {
           		return $this->return_Msg('0',$validate->getError(),'');
        	}else{
        		//查询数据验证用户
        		$checkuser = Db::table('web_user')->where("mobile",$data["mobile"])->find();
				if(!$checkuser){
					return $this->return_Msg(config('msg.code_no'),config('msg.user_no'));
				}else if($checkuser['password'] != $password){
					return $this->return_Msg(config('msg.code_no'),config('msg.pswd_no'));
				}else{
					Session::set('msql',$checkuser);						
					return $this->return_Msg(config('msg.code_ok'),config('msg.check_ok'));		//验证通过	
				}	
			}
		}
		
		//找回密码
		
		public function eaitpassword(){
			
			return	$this->fetch();
		}
		
	
		
		public function eait(){
			//接收前端数据
			$data = input();
			//实例验证器
			$validate = new \app\common\validate\Usereait;
			//验证器验证内置条件
			if (!$validate->scene('mobile')->check($data)) {
           		return $this->return_Msg('0',$validate->getError(),'');
        	}else{
        		//连接验证码数据库
        		$code = Db::name("code")->where("mobile",$data['mobile'])->find();
				//判断验证码数据库
				if($code['code'] != $data['mobilecode']){
					return $this->return_Msg('0','验证输入错误');
				}else if(time()-$code['time'] > 120){
					return $this->return_Msg('0','验证超时');
				};
				//判断手机号是否为空
				$adb=Db::name("web_user")->where('mobile',$data['mobile'])->find();
				if($adb == null){
					return $this->return_Msg('0','手机号未注册');
				};
				//添加到数据库并且判断数据连接是否成功
				try{
					$db=Db::name("web_user")->where('mobile',$data['mobile'])->update(["password" =>$data['password']]);
				}catch(\Exception $e){
					return $this->return_Msg('0',$e->getMessage());
				};
				//判断并返回值
				if($db){
					Db::name("code")->where("mobile",$data['mobile'])->delete();
					return $this->return_Msg('1','密码修改成功');
				}else{
					return $this->return_Msg('0','密码修改失败，请重新修改');
				}
				
        	}
			
				
		}
		
		
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	?>