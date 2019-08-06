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
use app\common\model\Link as LinkModel;

class LinkController extends AdminCheckAuth
{
    public function index()
    {
        return view('',[
            'link_id' => vae_get_param('id')
        ]);
    }

    //列表
    public function getLinkList()
    {
        $id = vae_get_param('id');
        $Link = Db::name('Link')->where([
            'link_id' => $id
        ])->select();
        return vae_assign(0,'',$Link);
    }

    //添加
    public function add()
    {
    	return view('',[
            'link_id' => vae_get_param('id')
        ]);
    }

    //提交添加
    public function addSubmit()
    {
    	if($this->request->isPost()){
    		$param = vae_get_param();
    		$result = $this->validate($param, 'app\admin\validate\Link.add');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                \think\loader::model('Link')->strict(false)->field(true)->insert($param);
                return vae_assign();
            }
    	}
    }

    //修改
    public function edit()
    {
        $id    = vae_get_param('id');
        $link = Db::name('link')->find($id);
        return view('',[
            'link'=>$link
        ]);
    }

    //提交修改
    public function editSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\Link.edit');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                \think\loader::model('Link')->where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
                \think\Cache::clear('VAE_ARTICLE_INFO');
                return vae_assign();
            }
        }
    }

    //删除
    public function delete()
    {
        $id    = vae_get_param("id");
        if (Db::name('Link')->delete($id) !== false) {
            return vae_assign(1,"删除成功！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

    public function index_info(){
        return view();
    }

    //列表
    public function getLinkListinfo()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['id|title|desc'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $rows = empty($param['limit']) ? \think\Config::get('paginate.list_rows') : $param['limit'];
        $Link = \think\loader::model('Link_info')
                ->order('create_time asc')
                ->where($where)
                ->paginate($rows,false,['query'=>$param]);
        return vae_assign_table(0,'',$Link);
    }

    //添加
    public function add_info()
    {
        return view();
    }

    //提交添加
    public function addinfoSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            \think\loader::model('Link_info')->strict(false)->field(true)->insert($param);
            return vae_assign();
        }
    }

    //修改
    public function edit_info()
    {
        $id    = vae_get_param('id');
        $link = Db::name('link_info')->find($id);
        return view('',[
            'link_info'=>$link
        ]);
    }

    //提交修改
    public function editinfoSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            \think\loader::model('Link_info')->where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
            return vae_assign();
        }
    }

    //删除
    public function deleteinfo()
    {
        $id    = vae_get_param("id");
        if (Db::name('Link_info')->delete($id) !== false) {
            return vae_assign(1,"删除成功！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }
}
