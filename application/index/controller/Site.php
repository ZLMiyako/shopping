<?php
	namespace app\index\controller;
	use think\Controller;
	use think\facade\Request;
	use think\Db;
	use think\facade\Session;
	class Site extends Base
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
				//post方式
				if(request()->isPost()){
					//根据p_id获取title和price
					$id = Request::param('id');
					$site = Db::name('adminsite')->where('id',$id)->find();
					if ($site) {
						return $this->return_Msg(1,'已查到');
					}else{
						return $this->return_Msg(2,'未查到');
					}
				}
				//地址详细信息获取
				$id = Request::param('id');
				$site = Db::name('adminsite')->where('id',$id)->find();
				$this->assign('list',$site);
			}else{
				$this->productnum();
			}
			return view();
		}
		//修改地址
		public function update(){
			$id = input('id');
			$data = request()->except(['id']);
			//halt($data);
			$update = Db::name('adminsite')->where('id',$id)->update($data);
			if ($update) {
				return $this->return_Msg(1,'已修改');
			}else{
				return $this->return_Msg(2,'未修改');
			}
		}
		//增加地址
		public function insert(){
			$msql = Session::get('msql');
			$data = request()->except(['id']);
			$data['u_id'] = $msql['id'];
			//halt($data);
			$insert = Db::name('adminsite')->insert($data);
			if ($insert) {
				return $this->return_Msg(1,'已修改');
			}else{
				return $this->return_Msg(2,'未修改');
			}
		}
	}