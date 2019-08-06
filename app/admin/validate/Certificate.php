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
namespace app\admin\validate;
use think\Validate;
use think\Db;

class Certificate extends Validate
{
    protected $rule = [
        'name'            => 'require',
        'id'               => 'require'
    ];

    protected $message = [
        'name.require'                 => '姓名不能为空',
        'id.require'                    => '缺少更新条件',
    ];

    protected $scene = [
        'add' => ['name','status'],
        'edit' => ['name','status'],
    ];
}