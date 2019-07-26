<?php
	namespace app\common\validate;
	use think\validate;
	class Adminnews extends Validate
	{
		protected $rule =   [
        'title'   => 'require|min:3',
        'content'    =>'require',
		'writer'  =>'require|length:3,5|chsAlpha',
		
    	];
    
    	protected $message  =   [
        'title.require'   => '大哥！标题不能为空哦 - -',
        'title.min'   	  => '大哥！标题不能少于3位',
        'content.require'    => '新闻内容不能为空',
        'writer.require'  =>'编辑人不能为空',
        'writer.length'   =>'编辑人长度在3-8之间',
        'writer.chsAlpha' =>'编辑人只能是中文和字母',
       
	   	];
	}
	
	?>