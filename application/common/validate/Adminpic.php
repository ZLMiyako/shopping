<?php
	namespace app\common\validate;
	use think\validate;
	class Adminpic extends Validate
	{
		protected $rule =   [
        'title'  => 'require|length:3,8',
        'img'  =>'require',

    	];
    
    protected $message  =   [
        'title.require' => '图片标题不能为空',
        'title.length' => '图片名长度必须3-8位',
        'img.require' => '图片不能为空',
   		];
	}
	
	?>