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

class User extends Validate
{
    protected $rule = [
        'title'            => 'require',
        'id'               => 'require',
        'status'           => 'require'
    ];

    protected $message = [
        'title.require'                 => '标题不能为空',
        'id.require'                    => '缺少更新条件',
        'status.require'                => '状态为必选',
    ];

    protected $scene = [
        'add' => ['title','status'],
        'edit' => ['title', 'id', 'status'],
    ];
}