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

class Article extends Validate
{
    protected $rule = [
        'title'            => 'require|unique:article',
        'content'          => 'require',
        'id'               => 'require',
        'article_cate_id'  => 'require',
        'status'           => 'require'
    ];

    protected $message = [
        'title.require'                 => '标题不能为空',
        'article_cate_id.require'       => '所属分类为必选',
        'title.unique'                  => '同样的记录已经存在!',
        'id.require'                    => '缺少更新条件',
        'content.require'               => '内容不能为空',
        'status.require'                => '状态为必选',
    ];

    protected $scene = [
        'add' => ['title','article_cate_id', 'content', 'status'],
        'edit' => ['title','article_cate_id', 'content', 'id', 'status'],
    ];
}