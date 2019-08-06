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

class ContactController extends BaseController
{
    //联系我们
    public function survey()
    {
        $data = Db::name('contact')->where('id',1)->find();
        $this->assign('data',$data);
        return view();
    }
}
