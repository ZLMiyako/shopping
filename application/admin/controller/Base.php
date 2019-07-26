<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\helper\Time;
use think\facade\Request;
	class Base extends Controller
	{
		
		//向前端传传送数据
		public function return_Msg($code = 200,$msg="",$data=[])
		{
			return json(['code'=>$code,'msg'=>$msg,'data'=>$data]);
		}
		
		//防止非法跳转
		public function initialize()
		{
			if(!session('?msql')){
				$this->redirect('Login/index');
			}
		}
		
		//图片上传
		public function upload(){
		    // 获取表单上传文件 例如上传了001.jpg
		    $file = request()->file('file');
		    // 移动到框架应用根目录/uploads/ 目录下
		    $info = $file->move( 'uploads');
			//判断图片上传
		    if($info){
			$p = str_replace('\\', '/', $info->getSaveName());
				
		        return $this->return_Msg('1','图片上传成功',$p);
		    }else{
		    	return $this->return_Msg('0','图片上传失败',$file->getError());
		    }
		}
		
		//首页影射
		public function index(){
			$alist = Db::table(request()->controller())->order('id','desc')->paginate(5,false,['query' => request()->param(),'type' => 'page\Page','var_page'  => 'page']);
			$nav = Db::table('adminnav')->order('id','asc')->limit(8)->select();
			//halt($aaa);
			$count = $alist->total();
			$page = $alist->render();
			$this->assign('alist',$alist);
			$this->assign('count',$count);
			$this->assign('page',$page);
			$this->assign('nav',$nav);
			return $this->fetch();
		}
		
		//添加页面影射
		public function picadd(){
			return $this->fetch();
		}
		
		//获取form的数据并且添加
		public function insert(){
			//判断提交类型
			if(!request()->isPost()){
				return $this->return_Msg('0','提交方式必须为Post');
			}
			//获取form传的数据
			$data = Request::except('file');
			//halt($data);
			$data['time'] = time();
			//实例验证器
			$str = "app.common.validate.".request()->controller();
			$va = str_replace('.','\\', $str);
			$validate = new $va;
			//验证器验证内置条件
			if (!$validate->check($data)) {
           		return $this->return_Msg('',$validate->getError(),'');
        	}	
			//添加到数据库并且判断数据连接是否成功
			try{
				$adb=Db::name(request()->controller())->insert($data);
			}catch(\Exception $e){
				return $this->return_Msg('0',$e->getMessage());
			}
			//判断并返回值
			if($adb){
				return $this->return_Msg('1','数据提交成功');
			}else{
				return $this->return_Msg('0','数据提交失败');
			}
		}
		
		//编辑页码影射
		public function edit(){
			$edit = request()->param();
			$update = db(request()->controller())->where('id',$edit['id'])->find();
			$this->assign('update',$update);
			return $this->fetch();
		}
		
		//更新数据
		public function update(){
			$update = request()->except('file');
			$update['time'] = time();
			//实例验证器
			$str = "app.common.validate.".request()->controller();
			$va = str_replace('.','\\', $str);
			$validate = new $va;
			//验证器验证内置条件
			if (!$validate->check($update)) {
         		return $this->return_Msg('',$validate->getError(),'');
      	}	
			try{
				$adb=Db::name(request()->controller())->where('id',$update['id'])->update($update);
			}catch(\Exception $e){
				return $this->return_Msg('0',$e->getMessage());
			}
			//判断并返回值
			if($adb){
				return $this->return_Msg('1','数据提交成功');
			}else{
				return $this->return_Msg('0','数据提交失败');
			}
		}
		
		//删除
		public function dele(){
			$dele = input();
			Db::table(request()->controller())->where('id',$dele['id'])->delete();
			$str = request()->controller();
			$dele = $str.'/'.'index';
			$this-> redirect($dele);
		}
		
		//导航搜索
		public function search(){
			if(request()->isPost()){
				$data = input();		
				//halt($data);
				$tj = "`title` LIKE '%$data[keyword]%'";
			}else{
				$tj = 1;
			}
			$res = db(request()->controller())->where($tj)->paginate(5,false,['query' => request()->param(),'type' => 'page\Page','var_page'  => 'page']);
			$nav = Db::table('adminnav')->order('id','asc')->limit(8)->select();
			$count = $res->total();
			$page = $res->render();
			$this->assign('alist',$res);
			$this->assign('keyword',$data);
			$this->assign('count',$count);
			$this->assign('page',$page);
			$this->assign('nav',$nav);
			$where = request()->controller();
			$apath = 'user/index';
			$path = str_replace('user',$where, $apath)	;
			return $this->fetch($path);
		}
		
		
		
		
	}
	?>