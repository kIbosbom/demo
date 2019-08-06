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

class IndexController extends BaseController
{
    //头部底部
    public function index()
    {
        $mfnews = Db::name('article')->where(['status'=>1,'article_cate_id'=>20,'delete_time'=>null])->order('create_time desc')->limit(6)->select(); //民防科普
        // $Trends = Db::name('article')->where(['status'=>1,'article_cate_id'=>22,'type_c'=>0,'delete_time'=>null])->order('create_time desc')->limit(7)->select(); //协会动态
        $Trends = Db::name('article')->where(['status'=>1,'article_cate_id'=>27,'type_c'=>0,'delete_time'=>null])->order('create_time desc')->limit(9)->select(); //政策法规
        $gd = Db::name('article')->where(['status'=>1,'article_cate_id'=>28,'type_c'=>0,'delete_time'=>null])->order('create_time desc')->limit(9)->select(); //通知公告
        $xhNews = Db::name('article')->where(['status'=>1,'article_cate_id'=>22,'delete_time'=>null])->order('create_time desc')->limit(6)->select(); //协会动态
        $hyNews = Db::name('article')->where(['status'=>1,'article_cate_id'=>26,'delete_time'=>null])->order('create_time desc')->limit(9)->select(); //行业信息
        $user = Db::name('user')->where(['status'=>1,'type'=>2])->order('create_time desc')->limit(6)->select(); //会员风采
        $Co = Db::name('article')->where(['status'=>1,'type_c'=>1,'delete_time'=>null])->find(); //C位置       

        $slideInfo = Db::name('SlideInfo')->where([
            'slide_id' => 2
        ])->select();
        return view('',[
            'Slide'     => $this->Slide(), //首页大轮播图
            'slideInfo' => $slideInfo, //底部四张广告
            'Trends'    => $Trends, //协会动态
            'hyNews'    => $hyNews, //行业新闻
            'xhNews'    => $xhNews, //协会新闻
            'mfnews'    => $mfnews, //民防常识
            'Co'        => $Co, //C位置
            'gd'        => $gd, //通知公告
            'user'      => $user, //会员风采
        ]);
    }
}
