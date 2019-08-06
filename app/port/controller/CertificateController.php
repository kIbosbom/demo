<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\port\controller;
use app\port\Controller\Base;
use think\Db;
use think\Request;
use app\port\model\Certificate;

class CertificateController extends BaseController
{
    //证书查询
    public function index()
    {
    	if($this->request->isAjax()){
            $param = vae_get_param();
            if(!empty($param['name']) && !empty($param['number'])){
                $data = Db::name('Certificate')->where(['name'=>$param['name'],'number'=>$param['number'],'status'=>1])->select();
            }
            if(!empty($param['name']) && !empty($param['code'])){
                $data = Db::name('Certificate')->where(['name'=>$param['name'],'code'=>$param['code'],'status'=>1])->select();
            }
            if(!empty($param['number']) && !empty($param['code'])){
                $data = Db::name('Certificate')->where(['number'=>$param['number'],'code'=>$param['code'],'status'=>1])->select();
            }
    		if($data){
    			return json_encode($data);
    		}else{
    			return false;
    		}
    	}
        $this->assign('data',''); // kong
        //首页
        if($this->request->isPost()){
            $param = vae_get_param();
            $data = null;
            // $data = Db::name('Certificate')->where([$param['keywords']=>$param['content'],'status'=>1])->select();
            if(!empty($param['name']) && !empty($param['number'])){
                $data = Db::name('Certificate')->where(['name'=>$param['name'],'number'=>$param['number'],'status'=>1])->select();
            }
            if(!empty($param['name']) && !empty($param['code'])){
                $data = Db::name('Certificate')->where(['name'=>$param['name'],'code'=>$param['code'],'status'=>1])->select();
            }
            if($data){
                $this->assign('data',$data);
            }else{
                $this->redirect('/');
            }   
        }
        return view();
    }

    //首页证书查询
    public function getC()
    {
        if($this->request->isGet()){
            $param = vae_get_param();
            // $data = Db::name('Certificate')->where([$param['keywords']=>$param['content'],'status'=>1])->select();
            if(!empty($param['name']) && !empty($param['number'])){
                $data = Db::name('Certificate')->where(['name'=>$param['name'],'number'=>$param['number'],'status'=>1])->select();
            }
            if(!empty($param['name']) && !empty($param['code'])){
                $data = Db::name('Certificate')->where(['name'=>$param['name'],'code'=>$param['code'],'status'=>1])->select();
            }
            if($data){
                return json_encode($data);
            }else{
                return false;
            }  
        }
        return view('index');
    }
}
