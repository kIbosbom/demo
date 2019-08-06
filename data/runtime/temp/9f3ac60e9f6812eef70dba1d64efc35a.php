<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\phpstudy\PHPTutorial\WWW\gds\public/../app/port\view\index\index.html";i:1562219673;s:64:"D:\phpstudy\PHPTutorial\WWW\gds\app\port\view\public\header.html";i:1547981714;s:61:"D:\phpstudy\PHPTutorial\WWW\gds\app\port\view\public\nav.html";i:1552984613;s:64:"D:\phpstudy\PHPTutorial\WWW\gds\app\port\view\public\footer.html";i:1553874201;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>首页-<?php echo $conf['title']; ?></title>
		<meta name="keywords" content="<?php echo $conf['keywords']; ?>">
<meta name="description" content="<?php echo $conf['desc']; ?>">
		<style>
			.cli,
			.cli2 {
				width: 94%;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
				padding-right: 10px;
			}
		</style>
	</head>
	<link rel="stylesheet" type="text/css" href="/static/myhome/css/title.css" />
	<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
	<link rel="stylesheet" type="text/css" href="/static/myhome/css/home.css" />

	<body>
		<style>
	.title_text>p{
		color: #ffffff;
		font-size: 22px;
		text-align: right;
		font-weight: bold;
		letter-spacing: 3px;
	}
	.title_text {
		position: absolute;
		top: 36.83333333%;
		right: -4px;
	}
</style>
<div>
	<div class="title">
		<img src="/static/myhome/img/home/bg@2x.png" />
		<div class="title_conter">
			<div>
				<div class="logo">
					<a href="/"><img src="<?php echo $conf['logo']; ?>" /></a>
				</div>
				<!-- <div class="title_text">
					<img src="/static/myhome/img/home/title_text@2x.png" />
				</div> -->
				<div class="title_text">
					<p><?php echo $conf['slogan']; ?></p>
				</div>
				<p class="title_btn flex">
					<a href="javascript:;">设为首页</a>
					<a href="javascript:;" onclick="alert('加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.')">收藏本站</a>
				</p>
			</div>
		</div>
	</div>
	<div class="nav">
		<div>
			<ul class="nav_ul flex">
				<li>
					<a href="/">首页</a>
				</li>
				<?php if(is_array($nav_index) || $nav_index instanceof \think\Collection || $nav_index instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li>
						<a href="<?php echo $vo['src']; ?>"><?php echo $vo['title']; ?></a>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>
		<div class="content">
			<div class="content_title">
				<p>
					<a href="<?php echo url('port/trends/details',['article_id'=>$Co['id'],'cateid'=>5]); ?>"><?php echo $Co['title']; ?></a>
				</p>
				<p>
					<a href="<?php echo url('port/trends/details',['article_id'=>$Co['id'],'cateid'=>5]); ?>"><?php echo $Co['keywords']; ?></a>
				</p>
			</div>
			<div class="container flex">
				<div class="container_left">
					<div class="banner" id="b03" style="width: 100%;">
						<ul class="banner_ul">
							<?php if(is_array($Slide) || $Slide instanceof \think\Collection || $Slide instanceof \think\Paginator): $i = 0; $__LIST__ = $Slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li style="background: url(<?php echo $vo['img']; ?>)no-repeat;">
								<a class="a_box" href="<?php echo $vo['src']; ?>"></a>
								<p>
									<a href="<?php echo $vo['src']; ?>"><?php echo $vo['title']; ?></a>
								</p>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div class="banner_bg"></div>
					</div>
					<div class="dynamic right_dy">
						<div class="flex tit_r">
							<ul class="dynamic_title flex title2">
								<li>
									<a href="javascript:;" class="dynamic_active">协会动态</a>
								</li>
								<li>
									<a href="javascript:;">会员风采</a>
								</li>
								<li>
									<a href="javascript:;">民防科普</a>
								</li>
								<span class="border_b border_b2"></span>
							</ul>
							<p class="more">
								<a id="more" class="flex" href="<?php echo url('port/News/index'); ?>"><span>更多</span><span><img src="/static/myhome/img/home/icon_right.png"/></span></a>
							</p>
						</div>
						<div class="list_dy_box list_dy_box2" k="1" style="height: 215px; padding: 12px 0 8px;">
							<ul class="list_dy list_dy_right list_dy2 dy_active">
								<?php if(is_array($xhNews) || $xhNews instanceof \think\Collection || $xhNews instanceof \think\Paginator): $i = 0; $__LIST__ = $xhNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<li class="list_dy_active">
									<a title="<?php echo $vo['title']; ?>" href="<?php echo url('port/Trends/details',['article_id'=>$vo['id'],'cateid'=>5]); ?>">
										<p class="flex"><span class="dotg"></span>
											<nobr class="cli2"><?php echo $vo['title']; ?></nobr>
										</p>
										<p><?php echo date("Y-m-d",$vo['create_time']); ?></p>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
							<ul class="list_dy list_dy_right list_dy2">
								<?php if(is_array($user) || $user instanceof \think\Collection || $user instanceof \think\Paginator): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<li class="list_dy_active">
									<a title="<?php echo $vo['title']; ?>" href="<?php echo url('port/user/details',['id'=>$vo['id']]); ?>">
										<p class="flex"><span class="dotg"></span>
											<nobr class="cli2"><?php echo $vo['title']; ?></nobr>
										</p>
										<p><?php echo date("Y-m-d",$vo['create_time']); ?></p>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
							<ul class="list_dy list_dy_right list_dy2">
								<?php if(is_array($mfnews) || $mfnews instanceof \think\Collection || $mfnews instanceof \think\Paginator): $i = 0; $__LIST__ = $mfnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<li class="list_dy_active">
									<a title="<?php echo $vo['title']; ?>" href="<?php echo url('port/Science/details',['article_id'=>$vo['id'],'cateid'=>4]); ?>">
										<p class="flex"><span class="dotg"></span>
											<nobr class="cli2"><?php echo $vo['title']; ?></nobr>
										</p>
										<p><?php echo date("Y-m-d",$vo['create_time']); ?></p>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
					</div>

				</div>
				<div class="container_right">
					<div class="dynamic">
						<ul class="dynamic_title flex title1">
							<li>
								<a href="javascript:;" class="dynamic_active">通知公告</a>
							</li>
							<li>
								<a href="javascript:;">政策法规</a>
							</li>
							<li>
								<a href="javascript:;">行业信息</a>
							</li>
							<li>
								<a href="javascript:;">证书查询</a>
							</li>
							<span class="border_b border_b1"></span>
						</ul>
						<div class="list_dy_box list_dy_box1" k='0'>
							<ul class="list_dy list_dy1 dy_active">
								<?php if(is_array($gd) || $gd instanceof \think\Collection || $gd instanceof \think\Paginator): $i = 0; $__LIST__ = $gd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<li class="list_dy_active">
									<a title="<?php echo $vo['title']; ?>" href="<?php echo url('port/trends/details',['article_id'=>$vo['id'],'cateid'=>5]); ?>">
										<p class="flex"><span class="dotg"></span>
											<nobr class="cli"><?php echo $vo['title']; ?></nobr>
										</p>
										<p><?php echo date("Y-m-d",$vo['create_time']); ?></p>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
							<ul class="list_dy list_dy1">
								<?php if(is_array($Trends) || $Trends instanceof \think\Collection || $Trends instanceof \think\Paginator): $i = 0; $__LIST__ = $Trends;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<li class="list_dy_active">
									<a title="<?php echo $vo['title']; ?>" href="<?php echo url('port/trends/details',['article_id'=>$vo['id'],'cateid'=>5]); ?>">
										<p class="flex"><span class="dotg"></span>
											<nobr class="cli"><?php echo $vo['title']; ?></nobr>
										</p>
										<p><?php echo date("Y-m-d",$vo['create_time']); ?></p>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
							<ul class="list_dy list_dy1">
								<?php if(is_array($hyNews) || $hyNews instanceof \think\Collection || $hyNews instanceof \think\Paginator): $i = 0; $__LIST__ = $hyNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<li class="list_dy_active">
									<a title="<?php echo $vo['title']; ?>" href="<?php echo url('port/News/details',['article_id'=>$vo['id'],'cateid'=>6]); ?>">
										<p class="flex"><span class="dotg"></span>
											<nobr class="cli"><?php echo $vo['title']; ?></nobr>
										</p>
										<p><?php echo date("Y-m-d",$vo['create_time']); ?></p>
									</a>
								</li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
							<div class="list_dy1">
								<div class="table_box">
									<div class="table_conter">
										<div class="table_title">
											<p>证件查询</p>
										</div>
										<div class="table_bottom">
											<form action="<?php echo url('port/Certificate/index'); ?>" method="post">
												<div class="table_input">
													<div class="flex"><span style="display: inline-block;width: 60px; position: relative;"><ab style="letter-spacing: 24px;">姓名</ab><ab style="position: absolute;right: 0;">：</ab></span>‍‍
														<p class="input_p"><input required="required" name="name" type="text" value="" oninvalid="setCustomValidity('请输入姓名')" oninput="setCustomValidity('')" /></p>
													</div>
													<div class="flex"><span class="text_t">身份证号：</span>
														<p class="input_p"><input type="text" name="code" value=""/></p>
													</div>
													<div class="flex"><span class="text_t">证书编号：</span>
														<p class="input_p" ><input type="text" name="number" value="" /></p>
													</div>
												</div>
												<div class="flex" style="width: 83%;margin: 0 auto;padding: 0 0 10px;justify-content: center;-webkit-justify-content: center;">
													<span style=" width: 60px;white-space: nowrap;visibility: hidden;"></span>
													<p style="width: 80%; font-size: 12px;color: #333;padding-right: 2px;">注：<span>以上三项输入任意两项即可查询</span></p>
												</div>
												<div class="btn_box_order flex">
													<span style="display: block; width: 60px;white-space: nowrap;visibility: hidden;"></span>
													<a style="width: 86%; href="javascript:;">
														<input class="table_btn" type="submit" value="查询">
													</a>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="input_li flex">
						<div class="search_box">
							<p><input type="text" class="search_inp" name="" id="" value="" /></p>
							<div class="flex search_pl">
								<p><img src="/static/myhome/img/home/search@2x.png" /></p>
								<p>搜索要查询的内容</p>
							</div>
						</div>
						<div class="search_btn">
							<a href="javascript:;">
								<p class="se">搜索</p>
							</a>
							<p class="btn_bg"></p>
						</div>
					</div>

					<div class="btn_box flex">
						<div class="bg_c1">
							<a href="<?php echo url('port/Article/index'); ?>">
								<p><img src="/static/myhome/img/home/home@2x.png" /></p>
								<p>协会概况</p>
							</a>
						</div>
						<div class="bg_c2">
							<a href="<?php echo url('port/Certificate/index'); ?>">
								<p><img src="/static/myhome/img/home/certificate@2x.png" /></p>
								<p>证书查询</p>
							</a>
						</div>
						<div class="bg_c3">
							<a href="<?php echo url('port/User/index'); ?>">
								<p><img src="/static/myhome/img/home/member@2x.png" /></p>
								<p>会员风采</p>
							</a>
						</div>
						<div class="bg_c4">
							<a href="<?php echo url('port/Contact/survey'); ?>">
								<p><img src="/static/myhome/img/home/flag@2x.png" /></p>
								<p>联系我们</p>
							</a>
						</div>
					</div>

				</div>
			</div>
			<div class="flex bottom_img">
				<?php if(is_array($slideInfo) || $slideInfo instanceof \think\Collection || $slideInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $slideInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<p>
					<a title="<?php echo $vo['desc']; ?>" href="<?php echo $vo['src']; ?>"><img alt="<?php echo $vo['desc']; ?>" src="<?php echo $vo['img']; ?>" /></a>
				</p>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<style>
	/*底部*/
	.list_div{
		width: 964px;
		height: 0;
		padding-top: 10px;
		flex-wrap: wrap;
		transition: all 0.3s;
		-webkit-transition: all 0.3s;
		opacity: 0;
		display: none;
	}
	.list_div>a{
		width: 25%;
		font-size: 12px;
		line-height: 12px;
		color: #FFFFFF;
		text-align: center;
		padding: 10px 0;
	}
	.list_div_active{
		display: flex;
		display: -webkit-flex;
		height: auto!important;
		opacity: 1!important;
	}
	.up{
		width: 14px;
		margin-left: 6px;
		transition: all 0.3s;
		-webkit-transition: all 0.3s;
	}
	.up_active{
		transform: rotate(180deg);
		-webkit-transform: rotate(180deg);
	}
	/**/
	.friend_div{
		padding: 22px 0 10px;
	}

	.friend>p{
		width: 8%;
		flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		justify-content: flex-start;	
		-webkit-justify-content: flex-start;	
	}
	.friend>p>a{
		margin: 0 0.6%;
		font-size: 14px;
	}
	
	.list_a_div{
		width: 92%;
		flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
	}
	
	.list_address{
		margin: 0 8px;
		font-size: 14px;
	}
</style>
<div class="bottom_foot">
	<div class="foot_new">
		<!--这里选择复制覆盖-->
		<div class="friend_div">
			<div class="friend flex">
				<p class="flex">
					<a style="font-weight:550;text-decoration: none;" href="javascript:;">友情链接：</a>
				</p>
				<div class="flex list_a_div">
					<?php if(is_array($link) || $link instanceof \think\Collection || $link instanceof \think\Paginator): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<a class="flex list_address" style="font-weight:550;text-decoration: none;" tid="<?php echo $v['id']; ?>" href="javascript:;"><span><?php echo $v['title']; ?></span><img class="up" src="/static/myhome/img/home/up.png" /></a>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div>
				<div class="list_div flex">

				</div>
			</div>
		</div>
		<!--这里选择复制覆盖-->
		<div class="copyright flex">
			<!--修改：增加广东省民防协会所有-->
			<a href="javascript:;" class="flex">
				<p><img src="/static/myhome/img/home/py_img@2x.png" /></p>
				<span>版权所有：<?php echo $conf['copyright']; ?></span>
			</a>
			<!--修改：增加广东省民防协会所有-->
			<!--增加style样式，直接写在html里面-->
			<p class="flex">
				<a target="_blank" style="text-decoration: none;" href="http://www.miibeian.gov.cn"><?php echo $conf['icp']; ?></a>
				<!-- <a href="javascript:;" style="text-decoration: none;">粤ICP备14030294号</a> -->
				<a href="javascript:;" style="text-decoration: none;">联系热线：<?php echo $conf['phone']; ?></a>
				<!-- <a href="javascript:;" style="border-right: 1px solid rgba(145, 159, 212, 1);padding-left: 20px;">网站地图</a> -->
				<a href="javascript:;"  onclick="alert('加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.')">收藏本站</a>
			</p>
			<!--增加style样式-->
		</div>
	</div>
</div>
<script src="/static/myhome/js/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8"></script>
<script>
	//友情链接点击
	(function(){
		var list_address=document.getElementsByClassName('list_address');
		var list_div=document.querySelector('.list_div');
		var up=document.getElementsByClassName('up');
		var indexarr=true;
		var num;
		for(var i=0;i<list_address.length;i++){
			list_address[i].setAttribute('index',i)
			list_address[i].onclick=function(){
				var index=this.getAttribute('index');//返回的下标,写ajx时用来判断
				var link_id = this.getAttribute('tid');
				if(!indexarr && num==index){
					list_div.classList.remove('list_div_active')
					up[index].classList.remove('up_active')
					indexarr=true
				}else{
					if(num){
						up[num].classList.remove('up_active')
					}
					//获取友情链接
					$.ajax({
				        type:"POST",
				        url:'<?php echo url("Base/link_aj"); ?>',
						data:{'id':link_id},
				        dataType:"json",
				        success:function(data){
							$(".mp").remove();
							var result=eval("("+data+")");
							for(var i=0;i<result.length;i++){
								var str = '<a class="mp" style="font-weight:550;text-decoration: none;" target="_blank" href="'+result[i]['src']+'">'+result[i]['title']+'</a>';
			                	$(".list_div").append(str);//追加到你需要放在的位置
			            	}
				        }
					});
					up[index].classList.add('up_active');
					list_div.classList.add('list_div_active');
					indexarr=false
				}
				num=index
			}
		}
	})();
</script>
		<script src="/static/myhome/js/unslider.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			//轮播图
			$(document).ready(function(e) {
				$('#b03').unslider({
					dots: true
				});
			});

			//协会动态头部nav切换
			var title1 = document.querySelector('.title1');
			var title2 = document.querySelector('.title2');
			var border_b1 = document.querySelector('.border_b1');
			var border_b2 = document.querySelector('.border_b2');
			var list_dy1 = document.getElementsByClassName('list_dy1');
			var list_dy2 = document.getElementsByClassName('list_dy2 ');

			//有修改，在这里开始复制
			var states = 0;
			var state = 1

			function titleFun(demo1, demo2, demo3, state) {
				var b_w = demo2.offsetWidth;
				for(var i = 0; i < demo1.children.length - 1; i++) {
					demo1.children[i].children[0].setAttribute('index', i);
					demo1.children[i].children[0].onclick = function() {
						var index = this.getAttribute('index'); //需要用到的index下标，写ajx时候用来判断
						for(var n = 0; n < demo1.children.length - 1; n++) {
							demo1.children[n].children[0].classList.remove('dynamic_active');
						}
						this.classList.add('dynamic_active');
						demo2.style.left = b_w * index + 2 + 'px';
						for(var g = 0; g < demo3.length; g++) {
							demo3[g].classList.remove('dy_active');
						}
						demo3[index].classList.add('dy_active')
						if(state == 1) {
							states = index
						}
					}
				}
			};

			titleFun(title1, border_b1, list_dy1); //协会动态+行业信息+证书查询
			titleFun(title2, border_b2, list_dy2, state); //通知公告+民防科普

			//点击更多判断
			(function() {
				var more = document.querySelector('.more');
				more.onclick = function() {
					if(states == 0) {
						$('#more').attr('href', '/port/Trends');
					}
					if(states == 1) {
						$('#more').attr('href', '/user/lst');
					}
					if(states == 2) {
						$('#more').attr('href', '/port/Science');
					}
				}
			})();

			//搜索框处理
			(function() {
				var search_pl = document.querySelector('.search_pl');
				var search_inp = document.querySelector('.search_inp');
				search_pl.onclick = function() {
					search_pl.classList.add('search_pl_active');
					search_inp.focus();
				};
				search_inp.onblur = function() {
					if(search_inp.value == '') {
						search_pl.classList.remove('search_pl_active');
					}
				}
			})();

			//搜索按钮
			(function() {
				var se = document.querySelector('.se');
				var btn_bg = document.querySelector('.btn_bg');
				se.addEventListener('mouseover', function() {
					btn_bg.style.width = 100 + '%';
					se.style.color = "#212121";
				});
				se.addEventListener('mouseout', function() {
					btn_bg.style.width = 0;
					se.style.color = '#898989';
				})
			})();

			//搜索框搜索
			(function() {
				var se = document.querySelector('.se');
				var search_inp = document.querySelector('.search_inp');
				se.onclick = function() {
					if(search_inp.value.length > 0) {
						var k = search_inp.value;
						window.location.href = '/port/search/index?k=' + k;
					} else {
						window.location.href = '/port/search/index';
					}
				}
			})();

			//证书
			function gradeChange() {
				var myselect = document.getElementById('pid');
				var index = myselect.selectedIndex;
				var text_t = document.querySelector('.text_t');
				var text = myselect.options[index].text;
				text_t.innerText = text + '：'
			}
		</script>
	</body>

</html>