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

class DownloadController extends BaseController
{
    //下载列表
    public function index()
    {
        $data = Db::name('enclosure')->where('status',1)->order('create_time desc')->paginate(10);
        $this->assign('data',$data);
        return view();
    }
}
