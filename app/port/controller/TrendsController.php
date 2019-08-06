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

class TrendsController extends BaseController
{
    //协会动态列表
    public function index()
    {
        $cate_id = input('cateid');
        if(empty($cate_id)){
            $cate_id = 5;
        }
        // 获取文章ID
        $article_id = input("article_id");
        if(empty($article_id)){
            $article_id = 22;
        }
        if ($article_id){
            $article = Db::name("article")->where(['article_cate_id'=>$article_id,'status'=>1,'delete_time'=>null])->order('create_time desc')->paginate(10);
            $this->assign("article",$article);
            $map = Db::name('article_cate')->where('id',$article_id)->value('title'); //位置
            $this->assign("map",$map);
        }
        $data = Db::name('article_cate')->select();
        $this->assign("cateid",$cate_id);
        $node = $this->_treeNode($data,$cate_id);
        return view();
    }

    //协会动态详情
    public function details()
    {
        $cate_id = input('cateid');
        $article_id = input("article_id");
        if ($article_id){
            $article = Db::name("article")->where(['id'=>$article_id,'status'=>1])->find();
            $this->assign("article",$article);
            $map = Db::name('article_cate')->where('id',$article['article_cate_id'])->value('title'); //位置
            $this->assign("map",$map);
        }
        $data = Db::name('article_cate')->select();
        $this->assign("cateid",$cate_id);
        $node = $this->_treeNode($data,$cate_id);
        return view();
    }
}
