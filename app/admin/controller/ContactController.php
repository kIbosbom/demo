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
namespace app\admin\controller;
use vae\controller\AdminCheckAuth;
use think\Db;
 
class ContactController extends AdminCheckAuth
{
	//联系我们
    public function edit()
    {
    	if($this->request->isPost()){
    		$param = vae_get_param();
    		Db::name('contact')->where('id',1)->update($param);
    		return vae_assign();
    	}
    	$data = Db::name('contact')->where('id',1)->find();
    	$this->assign('data',$data);
        return view();
    }
}