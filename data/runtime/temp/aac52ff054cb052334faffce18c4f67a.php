<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:40:"themes/admin_themes/view/user\index.html";i:1562476993;}*/ ?>
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

<div class="vae-content">
  <form class="layui-form" style="display: inline;">
    <input type="text" name="keywords" required  lay-verify="required" placeholder="ID/标题/内容" class="layui-input" autocomplete="off" style="max-width: 200px;display: inline;margin: -10px 10px 0 0;height: 30px;" />
    <button class="layui-btn layui-btn-sm layui-btn-danger" lay-submit="" lay-filter="vaeform">提交搜索</button>
  </form> 
  <table class="layui-hide" id="test" lay-filter="test"></table>
</div>

<script type="text/html" id="thumb">
  <img src='{{d.thumb}}' height="25"/>
</script>
<script type="text/html" id="status">
  <i class="layui-icon {{#  if(d.status == 1){ }}layui-icon-ok{{#  } else { }}layui-icon-close{{#  } }}"></i>
</script>
<script type="text/html" id="toolbarDemo">
  <div class="layui-btn-container">
    <a class="layui-btn layui-btn-primary layui-btn-sm" href="/admin/user/add">添加简介</a>
  </div>
</script>
<script type="text/html" id="barDemo">
  <a class="layui-btn layui-btn-xs layui-btn-primary" href="/admin/user/edit/id/{{d.id}}">编辑</a>
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
              
          
<script src="/themes/admin_themes/lib/layui/layui.js" charset="utf-8"></script>
 
<script>
layui.config({
    base: '/themes/admin_themes/module/'
}).use(['table','vaeyo','form'], function(){
  var table = layui.table
  ,vae = layui.vaeyo
  ,$ = layui.$
  ,form = layui.form;
  
  var tableIns = table.render({
    elem: '#test'
    ,toolbar: '#toolbarDemo'
    ,url: '/admin/user/getUserList' //数据接口
    ,page: true //开启分页
    ,limit: 15
    ,cols: [[ //表头
      {field: 'id', title: 'ID', sort: true, fixed: 'left', align:'center', width:80}
      ,{field: 'title', title: '标题', align:'center'}
      ,{field: 'create_time', title: '发布日期', align:'center',templet:"<div>{{layui.util.toDateString(d.create_time, 'yyyy-MM-dd')}}</div>"}
      ,{field: 'status', title:'状态', toolbar: '#status', align:'center', width:100}
      ,{field: 'right', toolbar: '#barDemo', width:150, align:'center'}
    ]]
  });
  
  //监听行工具事件
  table.on('tool(test)', function(obj){
    var data = obj.data;
    //console.log(obj)
    if(obj.event === 'del'){
      layer.confirm('确定删除?', {icon: 3, title:'提示'}, function(index){
        $.ajax({
          url:"/admin/user/delete",
          data:{id:data.id},
          success:function(res){
            layer.msg(res.msg);
            if(res.code==1){
              obj.del();
            }
          }
        })
        layer.close(index);
      });
    }
  });

  //监听搜索提交
  form.on('submit(vaeform)', function(data){
    console.log(data.field.keywords)
    if(data.field.keywords) {
      tableIns.reload({where:{keywords:data.field.keywords}});
      vae.bundledTab();
    }
    return false;
  });
});
</script>

</body>
</html>