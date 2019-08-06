<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:47:"themes/admin_themes/view/certificate\index.html";i:1553802151;}*/ ?>
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
    <input type="text" name="keywords" required  lay-verify="required" placeholder="ID/姓名/身份证号码" class="layui-input" autocomplete="off" style="max-width: 200px;display: inline;margin: -10px 10px 0 0;height: 30px;" />
    <button class="layui-btn layui-btn-sm layui-btn-danger" lay-submit="" lay-filter="vaeform">提交搜索</button>
  </form> 
  <table class="layui-hide" id="test" lay-filter="test"></table>
</div>

<script type="text/html" id="thumb">
  <img src='{{d.thumb}}' height="25"/>
</script>
<script type="text/html" id="n_time">
  <span>{{d.n_time}}</span>
</script>
<script type="text/html" id="toolbarDemo">
  <div class="layui-btn-container">
    <a class="layui-btn layui-btn-primary layui-btn-sm" href="/admin/certificate/add">添加证件</a>
  </div>
</script>
<script type="text/html" id="barDemo">
  <a class="layui-btn layui-btn-xs layui-btn-primary" href="/admin/certificate/edit/id/{{d.id}}">编辑</a>
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
    ,url: '/admin/certificate/getCertificateList' //数据接口
    ,page: true //开启分页
    ,limit: 15
    ,cols: [[ //表头
      {field: 'id', title: 'ID', type:'numbers', sort: true, fixed: 'left', align:'center', width:80}
      ,{field: 'key', title: '证书名称', align:'center',width:200}
      ,{field: 'number', title: '证书编号', align:'center',width:200}
      ,{field: 'name', title: '姓名', align:'center',width:150}
      ,{field: 'sex', title: '性别', align:'center',width:65}
      ,{field: 'code', title: '身份证号码', align:'center',width:200}
      ,{field: 'unit', title: '工作单位', align:'center',width:300}
      ,{field: 'u_time', title: '发证日期', align:'center',width:150}
      ,{field: 'n_time', title:'失效日期', toolbar: '#n_time', align:'center', width:150}
      ,{field: 'right', fixed: 'right', toolbar: '#barDemo', width:150, align:'center'}
    ]]
  });
  
  //监听行工具事件
  table.on('tool(test)', function(obj){
    var data = obj.data;
    //console.log(obj)
    if(obj.event === 'del'){
      layer.confirm('确定删除吗？', {icon: 3, title:'提示'}, function(index){
        $.ajax({
          url:"/admin/certificate/delete",
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
    } else if(obj.event === 'edit'){
      layer.prompt({
        formType: 2
        ,value: data.email
      }, function(value, index){
        obj.update({
          email: value
        });
        layer.close(index);
      });
    }
  });

  //监听搜索提交
  form.on('submit(vaeform)', function(data){
    console.log(data.field.keywords)
    if(data.field.keywords) {
      tableIns.reload({where:{keywords:data.field.keywords}});
    }
    return false;
  });
});
</script>

</body>
</html>