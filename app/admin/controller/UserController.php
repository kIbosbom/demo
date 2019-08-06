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
use app\common\model\User as UserModel;

class UserController extends AdminCheckAuth
{
    public function index()
    {
        return view();
    }

    //列表
    public function getUserList()
    {
        $param = vae_get_param();
        $where = array('type'=>1); //会员简介
        if(!empty($param['keywords'])) {
            $where['id|title|content'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $rows = empty($param['limit']) ? \think\Config::get('paginate.list_rows') : $param['limit'];
        $User = \think\loader::model('User')
                ->order('create_time asc')
                ->where($where)
                ->paginate($rows,false,['query'=>$param]);
        return vae_assign_table(0,'',$User);
    }

    //添加
    public function add()
    {
        return view();
    }

    //提交添加
    public function addSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\User.add');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                $param['type'] = 1;
                $param['create_time'] = strtotime($param['create_time']);
                \think\loader::model('User')->strict(false)->field(true)->insert($param);
                return vae_assign();
            }
        }
    }

    //修改
    public function edit()
    {
        $id    = vae_get_param('id');
        $User = Db::name('User')->find($id);
        return view('',[
            'User'=>$User
        ]);
    }

    //提交修改
    public function editSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\User.edit');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                $param['update_time'] = time(); //最后更新时间戳
                $param['create_time'] = strtotime($param['create_time']);
                \think\loader::model('User')->where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
                return vae_assign();
            }
        }
    }

    //删除
    public function delete()
    {
        $id    = vae_get_param("id");
        if (Db::name('User')->delete($id) !== false) {
            return vae_assign(1,"删除成功！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }
}
