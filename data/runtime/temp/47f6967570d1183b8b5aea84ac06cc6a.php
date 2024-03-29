<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:46:"themes/admin_themes/view/userdynamic\edit.html";i:1562478128;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>vaeThink</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/themes/admin_themes/lib/layui/css/layui.css"  media="all">
</head>
<body class="vae-body">

<form class="layui-form vae-content">

  <div class="layui-form-item">
    <label class="layui-form-label">标题</label>
    <div class="layui-input-block" style="max-width: 600px;">
      <input type="text" name="title" lay-verify="required" autocomplete="off" placeholder="请输入标题" class="layui-input" value="<?php echo $User['title']; ?>">
    </div>
  </div>
  <div class="layui-form-item">
      <label class="layui-form-label">发布时间</label>
      <div class="layui-inline"> <!-- 注意：这一层元素并不是必须的 -->
        <input type="text" value="<?php echo date('Y-m-d',$User['create_time']); ?>" name="create_time" class="layui-input" id="date1">
      </div>
  </div>
  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">内容</label>
    <div class="layui-input-block" style="max-width: 1200px;">
      <textarea name="content" placeholder="" class="layui-textarea" id="container" style="border:0;padding:0"><?php echo $User['content']; ?></textarea>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">状态</label>
    <div class="layui-input-block">
      <input type="radio" name="status" value="1" title="通过" <?php if($User['status'] == '1'): ?>checked<?php endif; ?>>
      <input type="radio" name="status" value="0" title="未通过" <?php if($User['status'] == '0'): ?>checked<?php endif; ?>>
    </div>
  </div>
  <div class="layui-form-item">
    <input type="hidden" name="id" value="<?php echo $User['id']; ?>">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit="" lay-filter="vaeform">立即提交</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>
          
<script src="/themes/admin_themes/lib/layui/layui.js" charset="utf-8"></script>
<script>
layui.config({
    base: '/themes/admin_themes/module/'
}).use(['upload','form','vaeyo','laydate'], function(){
  var form = layui.form
  var laydate = layui.laydate
  ,layer = layui.layer
  ,$ = layui.$
  ,upload = layui.upload
  ,vae = layui.vaeyo;

  //执行一个laydate实例
  laydate.render({
    elem: '#date1' //指定元素
  });

  //头像上传
  var uploadInst = upload.render({
    elem: '#test1'
    ,url: '/admin/api/upload'
    ,done: function(res){
      //如果上传失败
      if(res.code == 0){
        return layer.msg('上传失败');
      }
      //上传成功
      $('#demo1 input').attr('value',res.data);
      $('#demo1 img').attr('src',res.data);
    }
  });
  
  //监听提交
  form.on('submit(vaeform)', function(data){
    $.ajax({
      url:"/admin/userdynamic/editSubmit",
      type:'post',
      data:data.field,
      success:function(e){
        if(e.code==1){
          layer.confirm('保存成功,返回列表页吗?', {icon: 3, title:'提示'}, function(index){
            vae.backThisTab();
            layer.close(index);
          });
        }else{
          layer.msg(e.msg);
        }
      }
    })
    return false;
  });
  
});
</script>

</body>
<script id="container" name="content" type="text/plain"></script>
<script type="text/javascript" src="/themes/admin_themes/lib/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/themes/admin_themes/lib/ueditor/ueditor.all.js"></script>
<script type="text/javascript">
    var ue = UE.getEditor('container',{
      //初始化高度
      initialFrameHeight:200,
    });
</script>
</html>