<?php
	namespace app\common\validate;
	use think\validate;
	class Adminnav extends Validate
	{
		protected $rule =   [
        'nav'  => 'require|length:3,8',
        'img'  =>'require',

    	];
    
    protected $message  =   [
        'nav.require' => '图片标题不能为空',
        'nav.length' => '图片名长度必须3-8位',
        'img.require' => '图片不能为空',
   		];
	}
	
	?>