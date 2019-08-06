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
use think\Controller;
use \think\Config;
use \think\Db;

/**
 * 公共部分数据配置控制器
 */
class BaseController extends Controller
{
    public function _initialize()
    {
        $this->assign('conf',$this->webConf()); //基本配置
        $this->assign('nav_index',vae_get_navs('NAV_INDEX')); //导航栏菜单
        $this->assign('link', $this->Link()); //友情链接
    }

    //网站基本配置信息
    public function webConf(){
        $conf = Config::get('webconfig');
        return $webConf = [
            'index_title'  => empty($conf['index_title']) ? '' : $conf['index_title'],
            'ico_title'  => empty($conf['ico_title']) ? '' : $conf['ico_title'],
            'title'        => empty($conf['title']) ? '' : $conf['title'],
            'keywords'     => empty($conf['keywords']) ? '' : $conf['keywords'],
            'desc'         => empty($conf['desc']) ? '' : $conf['desc'],
            'logo'         => empty($conf['logo']) ? '' : $conf['logo'],
            'icp'          => empty($conf['icp']) ? '' : $conf['icp'],
            'zscx'          => empty($conf['zscx']) ? '' : $conf['zscx'],
            'code'         => empty($conf['code']) ? '' : $conf['code'],
            'domain'       => empty($conf['domain']) ? '' : $conf['domain'],
            'phone'  => empty($conf['phone']) ? '' : $conf['phone'],
            'copyright'  => empty($conf['copyright']) ? '' : $conf['copyright'],
            'slogan'  => empty($conf['slogan']) ? '' : $conf['slogan'],
        ];
    }

    //首页轮播图
    public function Slide(){
        $slideInfoList = Db::name('SlideInfo')->where([
            'slide_id' => 1
        ])->select();
        //循环替换\斜杠,background 反斜杠乱码
        foreach ($slideInfoList as $k => $v) {
            $slideInfoList[$k]['img'] = str_replace("\\", '/', $slideInfoList[$k]['img']);
        }
        return $slideInfoList;
    }

    //友情链接
    public function Link(){
        $link = Db::name('Link_info')->where('status',1)->select();
        return $link;
    }



    //无限级分类
    public function _treeNode($data,$parentId = 0)
    {
        // 用于保存整理好的分类节点
        $node = [];
        // 循环所有分类
        foreach ($data as $key => $value) {
            // 如果当前分类的父id等于要寻找的父id则写入$node数组,并寻找当前分类id下的所有子分类
            if($parentId == $value ['pid']) {
                $node [$key] = $value;
                $node [$key] ['childer'] = $this->_treeNode($data,$value ['id']);
            }
        }
        $this->assign('node',$node);
        return $node;
    }

    //友情链接ajax提交获取
    public function link_aj()
    {
        $link_id = input('id');
        $link = Db::name('link')->where(['link_id'=>$link_id,'status'=>1])->select();
        return json_encode($link);
    }
}
