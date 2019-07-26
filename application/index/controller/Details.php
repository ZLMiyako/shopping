<?php
	namespace app\index\controller;
	use think\Controller;
	use think\facade\Request;
	use think\Db;
	use think\facade\Session;
	class Details extends Base
	{
		public function index()
		
		{
			//搜索
			$this->search();
			//购物车物品数量
			if(session('?msql')){
				$msql = Session::get('msql');
				$u_id = $msql['id'];
				$this->productnum($u_id);
			}else{
				$this->productnum();
			}
			//点击率
			$data = Request::param('id');
			$aa = Db::table('adminproduct')->where('id',$data)->setInc('pv');
			//详情和信息
			$res = Db::name('adminproduct')->alias('a')->join('admindetails b','a.id = b.did')
														->join('adminmessage c','c.mid = a.id')
														->where('did',$data)->find();
			//halt($res);
			$this->assign('list',$res);	
			
			//取图片
			$img =explode(' ',trim($res['img'],' '));
			$this->assign('img',$img);
			//变体渲染
			$class = Db::name('adminclass')->where('did',$data)->select();
			
			$this->assign('img1',$img['0']);	//变体原味								
			$this->assign('class',$class);		//变体名称
			$this->assign('aclass',$class);		//变体图片
			
			//评论渲染
			$db = Db::table('admincomment')->where('cid',$data)->order('time desc')->select();
			
			foreach($db as $key=>$val){
				$db[$key]['c'] = Db::table('web_user')->where('id',$val['user_id'])->select();
			}
			//halt($db);
			$this->assign('comm',$db);
			return $this->fetch();
		}
			//评价
		public function comment(){
			$data = input();
			//halt($data);
			$data['time'] =time();
			$db = Db::name('admincomment')->insert($data);
			if($db){
				Db::table('admindetails')->where('did',$data['cid'])->setInc('appraise');
				return $this->return_Msg('1','评价成功');
			}else{
				return $this->return_Msg('0','发表失败');
			}
		}
		
	}
	
	
	
	
	
	
	
	
	
	?>