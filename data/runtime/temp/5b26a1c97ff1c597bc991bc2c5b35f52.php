<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:75:"D:\phpstudy\PHPTutorial\WWW\gds\public/../app/port\view\trends\details.html";i:1562469183;s:64:"D:\phpstudy\PHPTutorial\WWW\gds\app\port\view\public\header.html";i:1547981714;s:61:"D:\phpstudy\PHPTutorial\WWW\gds\app\port\view\public\nav.html";i:1552984613;s:64:"D:\phpstudy\PHPTutorial\WWW\gds\app\port\view\public\footer.html";i:1553874201;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $article['title']; ?>-<?php echo $conf['title']; ?></title>
		<meta name="keywords" content="<?php echo $conf['keywords']; ?>">
<meta name="description" content="<?php echo $conf['desc']; ?>">
		<style>
			.container{
				align-items: flex-start!important;
				-webkit-align-items: flex-start!important;
			}
		</style>
	</head>
	<link rel="stylesheet" type="text/css" href="/static/myhome/css/title.css" />
	<link rel="stylesheet" type="text/css" href="/static/myhome/css/introduction.css" />
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
		<!--头部-->
		<div class="container flex">
			<div class="left">
				<div class="left_title flex c_white"><i class="icon"></i>
					<p>协会动态</p>
				</div>
				<div class="list">
					<ul class="list_ul">
						<?php if(is_array($node) || $node instanceof \think\Collection || $node instanceof \think\Paginator): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			                <li class="list_li">
			                    <?php if($vo['childer']): ?>
			                       <a href="javascript:;">
			                    <?php else: ?>
			                        <a href="<?php echo url('port/Trends/index',['article_id'=>$vo['id'],'cateid'=>$cateid]); ?>"> 
			                    <?php endif; ?>
			                        <div class="flex">
			                            <p><img class="li_img" src="/static/myhome/img/survey/Arrow.png" /></p>
			                            <p class="c_333"><?php echo $vo['title']; ?></p>
			                        </div>
			                    </a>
			                    <div class="drop_down">
			                        <?php if(is_array($vo['childer']) || $vo['childer'] instanceof \think\Collection || $vo['childer'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['childer'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			                            <p>
			                                <a href="<?php echo url('port/Trends/index',['article_id'=>$v['id'],'cateid'=>$cateid]); ?>"><?php echo $v['title']; ?></a>
			                            </p>
			                        <?php endforeach; endif; else: echo "" ;endif; ?>
			                    </div>
			                </li>
			            <?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="right">
				<div class="right_title flex">
					<div class="flex"><i class="icon"></i>
						<p class="c_white"><?php echo $map; ?></p>
					</div>
					<div class="right_title_r c_white flex">
						<p>当前位置：<span><span>协会动态</span></span><span style="font-size: 14px;margin: 0 5px;">></span><span><span><?php echo $map; ?></span></span><span style="font-size: 14px;margin: 0 5px;">></span><span>正文</span></p>
					</div>
				</div>
				<div class="r_conter">
					<div>

						<div class="r_text ">
							<div class="text_title">
								<p><?php echo $article['title']; ?></p>
								<p>发布日期：<?php echo date("Y-m-d",$article['create_time']); ?></p>
								<p></p>
							</div>
							<div class="text_conter">
								<p style="text-indent:2em;">
									<?php echo $article['content']; ?>
								</p>
							</div>
						</div>

					</div>

				</div>
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
		<script type="text/javascript">
			//下拉列表
			(function() {
				var list_ul = document.querySelector('.list_ul');
				var li_img = document.getElementsByClassName('li_img');
				var drop_down = document.getElementsByClassName('drop_down');
				var index = 0;
				for(var i = 0; i < list_ul.children.length; i++) {
					list_ul.children[i].setAttribute('index', i);
					list_ul.children[i].children[0].children[0].onclick = function() {
						index = this.parentNode.parentNode.getAttribute('index');
						toggleClass(drop_down[index], 'drop_down_active');
					}
				}

				function hasClass(obj, cls) {
					var cls = cls || '';
					if(cls.replace(/\s/g, '').length == 0) {
						return false;
					} else {
						return new RegExp(' ' + cls + '').test(' ' + obj.className);
					}
				}

				function toggleClass(obj, cls) {
					hasClass(obj, cls) ? removeFn(obj, cls) : addFn(obj, cls);
					console.log(index)
				}

				function removeFn(obj, cls) {
					obj.classList.remove(cls);
					li_img[index].style.transform = "rotate(0deg)"
				}

				function addFn(obj, cls) {
					obj.classList.add(cls);
					li_img[index].style.transform = "rotate(90deg)"
				}
			})();
			
			(function(){
				var r_conter =document.querySelector('.r_conter');
				var list=document.querySelector('.list');
				var H=r_conter.offsetHeight;
				list.style.height=H+'px'
			})();
		</script>
	</body>

</html>