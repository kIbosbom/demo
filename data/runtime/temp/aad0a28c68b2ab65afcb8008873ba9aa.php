<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:40:"themes/admin_themes/view/cate\index.html";i:1548121741;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>vaeThink</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/themes/admin_themes/lib/layui/css/layui.css"  media="all">
  <style>
    html,body{
        height: calc(100% - 20px);
    }
  </style>
</head>
<body class="vae-body">

<div class="vae-content" style="height: 100%">
    <div>
        <a class="layui-btn layui-btn-primary layui-btn-sm" href="/admin/cate/add">添加分类</a>
    </div>
    <div style="height: calc(100% - 30px)">
      <table class="layui-hide" id="treeTable" lay-filter="treeTable"></table>
    </div> 
</div>         
          
<script src="/themes/admin_themes/lib/layui/layui.js" charset="utf-8"></script>
 
<script>
var editObj=null,ptable=null,treeGrid=null,tableId='treeTable',layer=null;
layui.config({
    base: '/themes/admin_themes/module/'
}).extend({
    treeGrid:'treeGrid'
}).use(['jquery','treeGrid','layer','table'], function(){
    var $=layui.jquery,table=layui.table;
    treeGrid = layui.treeGrid;//很重要
    layer=layui.layer;
    ptable=treeGrid.render({
        id:tableId
        ,elem: '#'+tableId
        ,idField:'id'
        ,url:'/admin/cate/getCateList'
        ,cellMinWidth: 100
        ,treeId:'id'//树形id字段名称
        ,treeUpId:'pid'//树形父id字段名称
        ,treeShowName:'title'//以树形式显示的字段
        ,height:'full-60'
        ,cols: [[
            {field:'id',width:80, title: 'ID', align:'center'}
            ,{field:'title', edit:'text',width:300, title: '名称', edit:"text"}
            ,{field:'pid', title: '父级ID', edit:"text",width:80, align:'center'}
            ,{field:'keywords', title: '关键词', edit:"text", align:'center'}
            ,{field:'desc', title: '描述', edit:"text", align:'center'}
            ,{width:150,title: '', align:'center'
                ,templet: function(d){
                var html='';
                var addBtn='<a class="layui-btn layui-btn-primary layui-btn-xs" vaeyo_tab vae-id="1007" vae-title="添加分类" vae-src="/admin/cate/add/pid/'+d.id+'">添加</a>';
                var delBtn='<a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>';
                return addBtn+delBtn;
              }
            }
        ]]
        ,page:false
        //,skin:'line'
    });
    //单元格编辑
    treeGrid.on('edit('+tableId+')', function(obj){
        layer.confirm('确定要提交修改吗?', {icon: 3, title:'提示'}, function(index){
            $.ajax({
              url:"/admin/cate/editSubmit",
              type:'post',
              data:{id:obj.data.id,field:obj.field,value:obj.value},
              success:function(res){
                if(res.code !== 1){
                  layer.msg(res.msg);
                }
              }
            }) 
            layer.close(index);
        });
    });
    //删除
    treeGrid.on('tool('+tableId+')',function (obj) {
        if(obj.event === 'del'){
            layer.confirm('确定要删除吗?', {icon: 3, title:'提示'}, function(index){
                $.ajax({
                  url:"/admin/cate/delete",
                  type:'post',
                  data:{id:obj.data.id},
                  success:function(res){
                    layer.msg(res.msg);
                    if(res.code == 1){
                        obj.del();
                    }
                  }
                }) 
                layer.close(index);
            });
        }
    });
});
function openorclose() {
    var map=treeGrid.getDataMap(tableId);
    var o= map['1'];
    treeGrid.treeNodeOpen(o,!o[treeGrid.config.cols.isOpen]);
}

function getCheckData() {
    var checkStatus = treeGrid.checkStatus(tableId)
        ,data = checkStatus.data;
    layer.alert(JSON.stringify(data));
}
</script>

</body>
</html>