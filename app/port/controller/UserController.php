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
use think\Request;
use think\Db;

class UserController extends BaseController
{
	//会员简介
    public function index()
    {
    	$Userlistimg = Db::name('user')->where(['status'=>1,'type'=>1])->order('create_time desc')->paginate(12);
    	$this->assign('list',$Userlistimg);
        return view();
    }

    //会员动态
    public function lst()
    {
    	$UserlistInfo = Db::name('user')->where(['status'=>1,'type'=>2])->order('create_time desc')->paginate(10);
    	$this->assign('list',$UserlistInfo);
    	return view();
    }

    //会员动态详情
    public function details()
    {
    	$id = input('id');
    	$article = Db::name('user')->where('id',$id)->find();
    	$this->assign('article',$article);
    	return view();
    }

    //会员详情
    public function detailsu()
    {
        $id = input('id');
        $article = Db::name('user')->where('id',$id)->find();
        $this->assign('article',$article);
        return view();
    }

    //会员资料上传
    public function upload()
    {
    	if($this->request->isPost()){
            $param = vae_get_param();
            if(empty($param['title'])){
            	$this->error('标题不能为空');
            }
         	if(!captcha_check($param['captcha']))//验证方法captcha_check()为助手函数
			{
			    $this->error('验证码错误');
			}
            $file = request()->file('file');
            if($file){
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->validate(['ext'=>'jpg,png'])->move(ROOT_PATH . 'public' . DS . 'upload' . DS . 'port');
                if($info){
                    $param['file'] = DS . 'upload' . DS . 'port'. DS . $info->getSaveName();
                }else{
			        // 上传失败获取错误信息
			        $this->error($file->getError());
			    }
            }
			unset($param['captcha']);
            $param['create_time'] = time();
			$param['status'] = 0;
		    $data = Db::name('user')->insert($param);
		    if($data){
		    	$this->success('上传成功');
		    }else{
		    	$this->error('异常');
		    }
    	}
    	return view();
    }
}
