<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:41:"themes/admin_themes/view/index\index.html";i:1545034256;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php echo vae_get_config('webconfig.admin_title') ? vae_get_config('webconfig.admin_title') : '后台管理中心'; ?></title>
  <link rel="stylesheet" href="/themes/admin_themes/lib/layui/css/layui.css">
  <link rel="stylesheet" href="/themes/admin_themes/lib/vaeyo/css/vaeyo.css">
  <script>
  /^http(s*):\/\//.test(location.href) || alert('请先部署到 localhost 下再访问');
  </script>
</head>
<body class="layui-layout-body">

	<div class="layui-layout layui-layout-admin">
		
	  	<div class="layui-header">
		    <div class="layui-logo" vaeyo-home><?php echo vae_get_config('webconfig.admin_title') ? vae_get_config('webconfig.admin_title') : '后台管理中心'; ?></div>
		    <div class="vaeyo-loading" vaeyo-loading><i class="layui-icon layui-icon-loading layui-icon layui-anim layui-anim-rotate layui-anim-loop"></i></div>
		    <ul class="layui-nav layui-layout-right">
		      <li class="layui-nav-item" lay-unselect>
		      	<a href="javascript:;" vaeyo-refresh class="refreshThis" id="vaeyo-refresh" title="刷新当前页">
			      	<i class="layui-icon layui-icon-refresh-3"></i> 
			    </a>
		      </li>
		      <li class="layui-nav-item" lay-unselect>
		        <a href="javascript:;" vaeyo-logout title="点击退出登录">
		          <img src="<?php echo vae_get_login_admin('thumb'); ?>" class="layui-nav-img">
		        </a>
		      </li>
		      <li class="layui-nav-item" lay-unselect>
			      <div>
					  <div id="vaeyo-color"></div>
				  </div>
			  </li>
		    </ul>
		</div>

		<div class="layui-side vaeyo-bg-gray">
		    <div class="vaeyo-menulist">
				<div class="vaeyo-menulist-1">
					<div class="vaeyo-menulist-top">
						<a href="javascript:;" title="修改个人信息" vaeyo_tab vae-id="10000" vae-title="修改个人信息" vae-src="/admin/api/editPersonal"><i class="layui-icon layui-icon-username"></i></a>
						<a href="javascript:;" title="修改密码" style="background-color: #01AAED" vaeyo_tab vae-id="10001" vae-title="修改密码" vae-src="/admin/api/editPassword"><i class="layui-icon layui-icon-password"></i></a>
						<a href="/" title="首页" style="background-color: #FFB800" target="_blank"><i class="layui-icon layui-icon-website"></i></a>
						<a href="javascript:;" title="回收站" style="background-color: #FF5722" vaeyo_tab vae-id="13" vae-title="回收站" vae-src="/admin/recycle/index"><i class="layui-icon layui-icon-log"></i></a>
						<a href="javascript:;" title="清空缓存" vaeyo-del-cache style="background-color: #009688"><i class="layui-icon layui-icon-delete"></i></a>
					</div>
					<?php $_result=vae_set_admin_menu();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<div class="vaeyo-menulist-2"><i class="layui-icon layui-icon-triangle-r"></i> <?php echo $v['title']; ?></div>
						<?php if(!(empty($v['list']) || (($v['list'] instanceof \think\Collection || $v['list'] instanceof \think\Paginator ) && $v['list']->isEmpty()))): ?>
						<div class="vaeyo-menulist-3">
							<ul>
								<?php if(is_array($v['list']) || $v['list'] instanceof \think\Collection || $v['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;if(empty($a['list']) || (($a['list'] instanceof \think\Collection || $a['list'] instanceof \think\Paginator ) && $a['list']->isEmpty())): ?>
								<li vaeyo_tab vae-id="<?php echo $a['id']; ?>" vae-title="<?php echo $a['title']; ?>" vae-src="<?php echo url($a['src'],$a['param']); ?>"><i class="layui-icon layui-icon-triangle-r"></i> <?php echo $a['title']; ?></li>
								<?php else: ?>
								<li class="vaeyo-menulist-2"><i class="layui-icon layui-icon-triangle-r"></i> <?php echo $a['title']; ?></li>
								<div class="vaeyo-menulist-3 vae-menulist-4">
									<ul>
										<?php if(is_array($a['list']) || $a['list'] instanceof \think\Collection || $a['list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $a['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e): $mod = ($i % 2 );++$i;?>
										<li vaeyo_tab vae-id="<?php echo $e['id']; ?>" vae-title="<?php echo $e['title']; ?>" vae-src="<?php echo url($e['src'],$e['param']); ?>"><i class="layui-icon layui-icon-triangle-r"></i> <?php echo $e['title']; ?></li>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</div>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
	  
	    <div class="layui-body">
		    <div class="layui-tab layui-tab-brief vaeyo-tab" lay-filter="vaeyo-tab" lay-allowClose="true" style="height: 100%;">
			  <ul class="layui-tab-title">
			    <li class="layui-this vaeyo-tab-home" lay-id="0">首页</li>
			  </ul>
			  <div class="layui-tab-content" style="height: 100%;" vaeyo-tab-content>
			    <div class="layui-tab-item layui-show">
			    	<iframe id="0" name="myiframe" src="/admin/main/index" frameborder="0" align="left" width="100%" height="100%" scrolling="yes"></iframe>
			    </div>
			  </div>
			</div>   
	    </div>

	</div>
 
	<script src="/themes/admin_themes/lib/layui/layui.js"></script>
	<script>
		layui.config({
		  base: '/themes/admin_themes/'
		}).use(['index'], function(){
			var $ = layui.$;
			$("[vaeyo-logout]").on("click", function(){
				layer.confirm('确认注销登录吗?', {icon: 7, title:'警告'}, function(index){
				  //注销
				  $.ajax({
				  	url:"/admin/publicer/logout",
				  	success:function(res){
				  		layer.msg(res.msg);
				  		if(res.code == 1){
				  			setTimeout(function(){
				  				location.href="<?php echo url('admin/publicer/login'); ?>"
				  			},1000)
				  		}
				  	}
				  })
				  layer.close(index);
				});
			})
		});
	</script> 
	  
</body>
</html>