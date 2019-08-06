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

class SearchController extends BaseController
{
    //信息列表
    public function index()
    {
        $key = input('k');
        $where = array();
        if(!empty($key)) {
            $where['title|content'] = ['like', '%' . $key . '%'];
        }
        $article = Db::name('article')->where($where)->order('create_time desc')->paginate(10);
        $this->assign('article',$article);
        return view();
    }

    //信息详情
    public function details()
    {
        $id = input('id');
        $article = Db::name('article')->where(['status'=>1,'id'=>$id])->find();
        $this->assign('article',$article);
        return view();
    }
}
