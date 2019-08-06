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

/** 
 * 证书管理
 */
namespace app\admin\controller;
use vae\controller\AdminCheckAuth;
use think\Db;
use app\common\model\Certificate as CertificateModel;

class CertificateController extends AdminCheckAuth
{
    public function index()
    {
        return view();
    }

    //列表
    public function getCertificateList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['id|name|code'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $rows = empty($param['limit']) ? \think\Config::get('paginate.list_rows') : $param['limit'];
        $Certificate = \think\loader::model('Certificate')
    			->order('create_time asc')
                ->where($where)
                ->paginate($rows,false,['query'=>$param]);
    	return vae_assign_table(0,'',$Certificate);
    }

    //添加
    public function add()
    {
        $data = Db::name('zsall')->select();
        $this->assign('data',$data);
    	return view();
    }

    //提交添加
    public function addSubmit()
    {
    	if($this->request->isPost()){
            $param = input('post.');
            // return $param;
    		$result = $this->validate($param, 'app\admin\validate\Certificate.add');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                for($i=0;$i<count($param['name']);$i++){
                    $insert[$i]['name']=$param['name'][$i];
                    $insert[$i]['code']=$param['code'][$i];
                    $insert[$i]['number']=$param['number'][$i];
                    $insert[$i]['status']=$param['status'][$i];
                    $insert[$i]['u_time']=$param['u_time'][$i];
                    $insert[$i]['n_time']=$param['n_time'][$i];
                    $insert[$i]['key']=$param['key'][$i];
                    $insert[$i]['unit']=$param['unit'][$i];
                    $insert[$i]['sex']=$param['sex'][$i];
                    $insert[$i]['create_time']=time();
                }
                $data = Db::name('certificate')->insertAll($insert);
                return vae_assign();
            }
    	}
    }

    //修改
    public function edit()
    {
        $id    = vae_get_param('id');
        $Certificate = Db::name('certificate')->find($id);
        // $zs = Db::name('zs')->where('pid',$id)->select();
        return view('',[
            'Certificate'=>$Certificate
        ]);
    }

    //提交修改
    public function editSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\Certificate.edit');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                $param['update_time'] = time(); //最后更新时间戳
                \think\loader::model('certificate')->where(['id'=>$param['id']])->strict(false)->field(true)->update($param);
                return vae_assign();
            }
        }
    }

    //删除
    public function delete()
    {
        $id    = vae_get_param("id");
        if (Db::name('certificate')->delete($id) !== false) {
            return vae_assign(1,"删除成功！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

    //新增
    public function add_ap()
    {
        $param = vae_get_param();
        Db::name('zs')->insert(['pid'=>$param['pid']]);
        $id = Db::name('zs')->getLastInsID();
        return $id;
    }

    //删除
    public function del_ap()
    {
        $id = vae_get_param();
        Db::name('zs')->delete($id);
    }

    //证书列表
    public function add_xz()
    {
        $param = vae_get_param();
        $data = Db::name('zsall')->insert($param);
        if($data){
            return ['code'=>1,'msg'=>'添加成功!'];
        }else{
            return ['code'=>2,'msg'=>'添加失败!'];
        }
    }

    //证书列表删除
    public function add_sc()
    {
        $param = vae_get_param();
        $data = Db::name('zsall')->delete($param);
        if($data){
            return ['code'=>1,'msg'=>'删除成功!'];
        }else{
            return ['code'=>2,'msg'=>'删除失败!'];
        }
    }
}
