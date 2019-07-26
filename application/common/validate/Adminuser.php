<?php
	namespace app\common\validate;
	use think\validate;
	class Adminuser extends Validate
	{
	protected $rule =   [
        'username'  => 'require|length:3,8',
        'password'   => 'require|length:3,8',
      	'code'			=>'require',
    	];
    
    protected $message  =   [
        'username.require' => '亲！用户名不能为空',
        'password.require' => '亲！密码不能为空',
        'code.require' => '亲！验证码不能为空',
        'username.length'  => '亲！用户名长度必须3-8位',
        'password.length'  => '亲！密码长度必须3-8位',
   		];
	}
	
	?>