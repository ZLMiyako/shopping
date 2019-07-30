<?php
	namespace app\index\controller;
	use think\Controller;
	use think\facade\Request;
	use think\Db;
	use think\facade\Session;
	class Logistics extends Base
	{
		public function index()
		
		{
            $id = input('id');
            $logistics = Db::name('adminorder_number')->where(['id'=>$id])->find();
            $no = $logistics['logistics'];
            $type = $logistics['abbreviation'];
            //halt($no);
            $host = "https://wuliu.market.alicloudapi.com";//api访问链接
            $path = "/kdi";//API访问后缀
            $method = "GET";
            $appcode = "6aa83717b66e4815905e04a5c5097dc0";//替换成自己的阿里云appcode
            $headers = array();
            array_push($headers, "Authorization:APPCODE " . $appcode);
            $querys = "no=$no&type=$type";  //参数写在这里
            $bodys = "";
            $url = $host . $path . "?" . $querys;//url拼接

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_FAILONERROR, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, false);
            //curl_setopt($curl, CURLOPT_HEADER, true); 如不输出json, 请打开这行代码，打印调试头部状态码。
            //状态码: 200 正常；400 URL无效；401 appCode错误； 403 次数用完； 500 API网管错误
            if (1 == strpos("$".$host, "https://"))
            {
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            }
            $a = curl_exec($curl);
            $b = json_decode($a,true);
            $c = $b['result']['list'];
            $this->assign('list',$c);

            $this->assign('logistics',$no);

            $goods = Db::name('adminorder')->where(['n_id'=>$id])->select();
            $this->assign('goods',$goods);
			return view();
		}

	}