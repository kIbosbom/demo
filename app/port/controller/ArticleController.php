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

class ArticleController extends BaseController
{
    public function index()
    {
        $cate_id = input('cateid');
        if(empty($cate_id)){
            $cate_id = 2;
        }
        // 获取文章ID
        $article_id = input("article_id");
        if(empty($article_id)){
            $article_id = 10;
        }
        if ($article_id){
            $article = db("article")->where(['article_cate_id'=>$article_id,'status'=>1])->find();
            $map = Db::name('article_cate')->where('id',$article['article_cate_id'])->value('title'); //位置
            $this->assign("article",$article);
            $this->assign("map",$map);
        }
        $data = Db::name('article_cate')->select();
        $this->assign("cateid",$cate_id);
        $node = $this->_treeNode($data,$cate_id);
        return view();
    }

    //ajax 查询文章
    public function ajaxText()
    {
        $cate_id = input('cateid');
        $article_id = input('article_id');
        $article = db("article")->where(['article_cate_id'=>$article_id,'status'=>1])->find();
        $map['map'] = Db::name('article_cate')->where('id',$article['article_cate_id'])->value('title'); //位置
        $pid['pid'] = Db::name('article_cate')->where('id',$article['article_cate_id'])->value('pid'); //位置
        if($pid['pid']){
            $maf['maf'] = Db::name('article_cate')->where('id',$pid['pid'])->value('title'); //位置
        }
        $data = array_merge($article,$map,$pid,$maf);
        return json_encode($data);
    }
}
