<?php
	namespace app\common\validate;
	use think\validate;
	class Usereait extends Validate
	{
	protected $rule =   [
        'email'     => 'require|email',
        'mobile'    => 'require|mobile',
        'password'  => 'require|length:6,20|alphaNum|confirm',
    	'mobilecode'=> 'require',
    	];
    
    protected $message  =   [
        'mobile.require'   => '亲！手机号不能为空',
        'mobile.mobile'    => '亲！手机号格式不正确',
        'email.require'    => '亲！邮箱不能为空',
        'email.email'      => '亲！邮箱格式不正确',
        'password.require' => '亲！密码不能为空',
        'password.length'  => '亲！密码长度必须是6-20位',
        'password.alphaNum'=> '亲！密码必须是字母和数字',
        'password.confirm' => '亲！两次密码输入不一致',
     	'mobilecode.require' => '亲！验证码不能为空',
        
   		];
		
	protected $scene = [
        'mobile'  =>  ['mobile','mobilecode','password'],
        'email'   =>  ['email','password'],
    ];	

	}
	
	?>