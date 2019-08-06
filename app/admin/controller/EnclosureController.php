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
use app\common\model\Enclosure as EnclosureModel;

class EnclosureController extends AdminCheckAuth
{
    public function index()
    {
        return view();
    }

    //列表
    public function getenclosureList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['id|title|desc'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $rows = empty($param['limit']) ? \think\Config::get('paginate.list_rows') : $param['limit'];
        $Enclosure = \think\loader::model('Enclosure')
    			->order('create_time asc')
                ->where($where)
                ->paginate($rows,false,['query'=>$param]);
    	return vae_assign_table(0,'',$Enclosure);
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
    		$result = $this->validate($param, 'app\admin\validate\Enclosure.add');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                $param['create_time'] = time(); //创建时间戳
                \think\loader::model('enclosure')->strict(false)->field(true)->insert($param);
                return vae_assign();
            }
    	}
    }

    //修改
    public function edit()
    {
        $id    = vae_get_param('id');
        $Enclosure = Db::name('enclosure')->find($id);
        return view('',[
            'Enclosure'=>$Enclosure
        ]);
    }

    //提交修改
    public function editSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\Enclosure.edit');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                $param['update_time'] = time(); //最后更新时间戳
                \think\loader::model('enclosure')->where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
                return vae_assign();
            }
        }
    }

    //删除
    public function delete()
    {
        $id    = vae_get_param("id");
        if (Db::name('enclosure')->delete($id) !== false) {
            return vae_assign(1,"删除成功！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }
}
