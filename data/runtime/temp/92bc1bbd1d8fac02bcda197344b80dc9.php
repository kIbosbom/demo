<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:40:"themes/admin_themes/view/main\index.html";i:1554317029;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>vaeThink</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/themes/admin_themes/lib/layui/css/layui.css" media="all">
  <style type="text/css">
    .layui-anim .vae-card .layui-icon {
      width: 40px;
      height: 40px;
      line-height: 40px;
      text-align: center;
      display: block;
      border-radius: 50%;
      background-color: #FF5722;
      color: #fff;
      opacity: .9;
      font-size: 16px;
    }

    .vaeyo-main-header {
      height: 280px;
    }

    .vae-card {
      padding: 20px;
    }

    .vae-card .vae-card-right {
      display: block;
      width: auto;
      margin-left: 10px;
      height: 100%;
    }

    .vae-card .vae-card-right h2 {
      font-size: 12px;
    }
    .flex{
      display: flex;
      display: -webkit-flex;
    }
    .align{
      align-items: center;
      -webkit-align-items: center;
    }
    .layui-card-body{
      padding: 0;
    }
    .wid_25{
      width: 25%;
    }
    .a{
      justify-content: flex-start;
      -webkit-justify-content: flex-start;
    }
    .padding_6{
      padding: 0 10px 0 0; 
    }

    .user_box{
      width: 23%;
      padding-left: 20px;
      text-align: center;
    }
    .justify{
      justify-content: center;
     -webkit-justify-content: center;
    }
    .user_text{
      font-size: 12px;
      font-weight: 200;
      color: #999;
      margin-left: 20px;
      margin-bottom: 16px;
      text-align: left;
    }
    .layui-table td{
    	border-width: 0;
    }
  </style>
</head>

<body class="vae-body">
  <div style="background-color: #f1f2f7;padding-top:10px;padding-right: 10px;padding-left: 10px;">
    <div class="flex align" style="width: 100%;padding: 20px 0;background: #fff;">

    <div class="user_box flex justify align">
      <div>
        <div style="margin-bottom: 14px;">
          <p> <!-- <img src="user@2x.png"/> --> <i class="layui-icon layui-icon-user" style="color: #1296db;font-weight: bold;font-size: 50px;"></i></p>
          <p style="color: #333;">admin</p>
        </div>
        <div class="flex" style="justify-content: space-between;-webkit-justify-content: space-between;">
          <p><i class="layui-icon layui-icon-cellphone" style="color: #7dc5eb;"></i> </p>
          <p><i class="layui-icon layui-icon-vercode" style="color: #ec6910;"></i></p>
        </div>
      </div>
      <div class="user_text">
        <p>上次登录: <span>2019-03-18</span> </p>
        <p style="margin-top: 4px;">登  录  IP：<span>120.0.0.118</span></p>
      </div>
    </div>
  


    <div class="flex align" style="width:50%;height:100%;flex-wrap: wrap;-webkit-flex-wrap: wrap; background:#fff;">
      <div class="flex align"  style="width:100%;padding: 15px 20px 15px 0; background:#fff;">
        <div class="layui-anim layui-anim-scale wid_25">
          <div class="layui-card padding_6">
            <div class="layui-card-body vae-card">
              <a class="flex align a" vaeyo_tab vae-id="10000" vae-title="修改个人信息" title="修改个人信息" vae-src="/admin/api/editPersonal" href="javascript:;">
                <div class="icon"><i class="layui-icon layui-icon-user" style="background-color: #5FB878"></i></div>
                <div class="vae-card-right">
                  <h2>个人信息</h2>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="layui-anim layui-anim-scale wid_25">
          <div class="layui-card padding_6">
            <div class="layui-card-body vae-card">
              <a class="flex align a" vaeyo_tab vae-id="10001" vae-title="首页C位" title="首页C位" vae-src="/admin/article/c" href="javascript:;">
                <div class="icon"><i class="layui-icon layui-icon-home"></i></div>
                <div class="vae-card-right">
                  <h2>首页C位</h2>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="layui-anim layui-anim-scale wid_25">
          <div class="layui-card padding_6">
            <div class="layui-card-body vae-card">
              <a class="flex align a" vaeyo_tab vae-id="10002" vae-title="文章列表" title="文章列表" vae-src="/admin/article/index" href="javascript:;">
                <div class="icon"><i class="layui-icon layui-icon-list" style="background-color:#01AAED"></i></div>
                <div class="vae-card-right">
                  <h2>文章列表</h2>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="layui-anim layui-anim-scale wid_25">
          <div class="layui-card padding_6">
            <div class="layui-card-body vae-card">
              <a class="flex align a" vaeyo_tab vae-id="10003" vae-title="联系我们" title="联系我们" vae-src="/admin/contact/edit" href="javascript:;">
                <div class="icon"><i class="layui-icon layui-icon-cellphone" style="background-color: #2F4056"></i></div>
                <div class="vae-card-right">
                  <h2>联系我们</h2>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>


      <div class="flex align"  style="width: 100%; padding: 15px 20px 15px 0; background:#fff;">
        <div class="layui-anim layui-anim-scale wid_25">
          <div class="layui-card padding_6">
            <div class="layui-card-body vae-card">
              <a class="flex align a" vaeyo_tab vae-id="10004" vae-title="广告管理" title="广告管理" vae-src="/admin/slide/index" href="javascript:;">
                <div class="icon"><i class="layui-icon layui-icon-carousel" style="background-color: rgb(95, 163, 184)"></i></div>
                <div class="vae-card-right">
                  <h2>广告管理</h2>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="layui-anim layui-anim-scale wid_25">
          <div class="layui-card padding_6">
            <div class="layui-card-body vae-card">
              <a class="flex align a" vaeyo_tab vae-id="10005" vae-title="友情链接" title="友情链接" vae-src="/admin/link/index" href="javascript:;">
                <div class="icon"><i class="layui-icon layui-icon-link"></i></div>
                <div class="vae-card-right">
                  <h2>友情链接</h2>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="layui-anim layui-anim-scale wid_25">
          <div class="layui-card padding_6">
            <div class="layui-card-body vae-card">
              <a class="flex align a" vaeyo_tab vae-id="10006" vae-title="证书管理" title="证书管理" vae-src="/admin/certificate/index" href="javascript:;">
                <div class="icon"><i class="layui-icon layui-icon-auz" style="background-color: #01AAED"></i></div>
                <div class="vae-card-right">
                  <h2>证书管理</h2>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="layui-anim layui-anim-scale wid_25">
          <div class="layui-card padding_6">
            <div class="layui-card-body vae-card">
              <a class="flex align a" vaeyo_tab vae-id="10007" vae-title="资料管理" title="资料管理" vae-src="/admin/enclosure/index" href="javascript:;">
                <div class="icon"><i class="layui-icon layui-icon-file-b" style="background-color: rgb(238, 17, 17)"></i></div>
                <div class="vae-card-right">
                  <h2>资料管理</h2>
                </div>
              </a>
            </div>
          </div>
        </div>     
      </div>

      </div>
  


      <!-- <div class="layui-col-md4"> -->
        <div class="layui-card flex align" style="width: 24%">
          <div class="layui-card-body">
            <table class="layui-table" lay-skin="" lay-size="sm">
              <colgroup>
                <col width="150">
                <col>
              </colgroup>
              <tbody>
                <tr>
                  <td width="30" style="border-width: 1px;"><b>操作系统</b></td>
                  <td width="200" style="border-width: 1px 1px 1px 0;"><?php echo vae_get_system_info('os'); ?></td>
                </tr>
                <tr>
                  <td style="border-width: 0 1px 1px 1px;"><b>PHP版本</b></td>
                  <td style="border-width: 0 1px 1px 0;"><?php echo vae_get_system_info('php'); ?></td>
                </tr>
                <tr>
                  <td style="border-width: 0 1px 1px 1px;"><b>ThinkPHP版本</b></td>
                  <td style="border-width: 0 1px 1px 0;"><?php echo THINK_VERSION; ?></td>
                </tr>
                <tr>
                  <td style="border-width: 0 1px 1px 1px;"><b>Layui版本</b></td>
                  <td style="border-width: 0 1px 1px 0;"><?php echo LAYUI_VERSION; ?></td>
                </tr>
                <tr>
                  <td style="border-width: 0 1px 1px 1px;"><b>上传附件限制</b></td>
                  <td style="border-width: 0 1px 1px 0;"><?php echo vae_get_system_info('upload_max_filesize'); ?></td>
                </tr>
                <tr>
                  <td style="border-width: 0 1px 1px 1px;"><b>执行时间限制</b></td>
                  <td style="border-width: 0 1px 1px 0;"><?php echo vae_get_system_info('max_execution_time'); ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      <!-- </div> -->
    </div>
  </div>
  <script src="/themes/admin_themes/lib/layui/layui.js" charset="utf-8"></script>
<script>
  layui.config({
    base: '/themes/admin_themes/module/'
  }).define(['table', 'echarts', 'layer', 'element'], function (exports) {
    var $ = layui.jquery,
      layer = layui.layer,
      element = layui.element,
      table = layui.table;
    exports('main', {});
  });
</script>
</body>
</html>