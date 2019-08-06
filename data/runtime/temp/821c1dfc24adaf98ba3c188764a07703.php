<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"D:\phpstudy\PHPTutorial\WWW\gds\public/../app/port\view\certificate\index.html";i:1562475262;s:64:"D:\phpstudy\PHPTutorial\WWW\gds\app\port\view\public\header.html";i:1547981714;s:61:"D:\phpstudy\PHPTutorial\WWW\gds\app\port\view\public\nav.html";i:1552984613;s:64:"D:\phpstudy\PHPTutorial\WWW\gds\app\port\view\public\footer.html";i:1553874201;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>证书查询-<?php echo $conf['title']; ?></title>
		<meta name="keywords" content="<?php echo $conf['keywords']; ?>">
<meta name="description" content="<?php echo $conf['desc']; ?>">
		<style>
			.container {
				align-items: flex-start!important;
				-webkit-align-items: flex-start!important;
			}
			
			.explain {
				position: absolute;
				width: 423px;
				left: 50%;
				margin-left: -211.5px;
				top: 440px;
				font-size: 14px;
				color: #333333;
			}
		</style>
	</head>
	<link rel="stylesheet" type="text/css" href="/static/myhome/css/title.css" />
	<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
	<link rel="stylesheet" type="text/css" href="/static/myhome/css/certificate.css" />

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
		<div class="container flex">
			<div class="left">
				<div class="left_title flex c_white"><i class="icon"></i>
					<p>证书查询</p>
				</div>
				<div class="list">
					<ul class="list_ul">
						<li class="list_li">
							<a href="<?php echo url('port/Certificate/index'); ?>">
								<div class="flex">
									<p><img class="li_img" src="/static/myhome/img/survey/Arrow.png" /></p>
									<p class="c_333">证书查询</p>
								</div>
							</a>
							<div class="drop_down">
							</div>
						</li>

					</ul>
				</div>
			</div>
			<div class="right">
				<div class="right_title flex">
					<div class="flex right_l">
						<i class="icon"></i>
						<p class="c_white">证书查询</p>
					</div>
					<div class="right_title_r c_white flex">
						<p>当前位置：<span><span>证书查询</span></span>
						</p>
					</div>
				</div>
				<div class="r_conter">
					<div class="r_text">
						<div class="table_box">
							<div class="table_conter">
								<div class="table_title" style="display: none;">
									<p>证书查询</p>
								</div>
								<div class="table_bottom">
									<form id="form1" onkeydown="if(event.keyCode==13){return false;}">
										<div class="flex" style="padding: 0 10% 24px;justify-content: space-between;-webkit-justify-content: space-between;align-items: flex-end;-webkit-align-items: flex-start;">
										<div class="table_input">
											<div class="flex">
												<span style="position: relative; display: inline-block;width: 80px;"><ab style="letter-spacing: 33px;">姓名</ab><ab style="position: absolute;right: 0;">：</ab></span>
												<input type="text" id="name" name="name" value="" /> ‍
											</div>
											<div class="flex">
												<span class="text_t">身份证号：</span>
												<input type="text" name="code" value="" />
											</div>
											<div class="flex">
												<span class="text_t">证书编号：</span>
												<input type="text" name="number" value="" />
											</div>
											<div class="btn_box">
											<a style="cursor:pointer; display: block;width: 193px;margin-left: 80px;" href="javascript:;">
												<input class="table_btn" type="button" value="查询" onclick="sub()">
											</a>
										</div>
										</div>
										<div class="bg_w"></div>
										<div style="width: 46%;color: #333333;font-size: 14px;line-height: 27px;margin-top: 39px;font-family: MicrosoftYaHei">
											<h4>说明：</h4>
											<p><?php echo $conf['zscx']; ?></p>
										</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="tb" >
							<div class="flex table_tit">
								<p style="width: 16%;"><span>姓名</span></p>
								<p style="width: 24%;"><span>身份证</span></p>
								<p style="width: 28%;"><span>证书名称</span></p>
								<p style="width: 18%;"><span>证书编号</span></p>
								<p style="width: 14%;"><span>状态</span></p>
							</div>
							<div class="li_list">
								<!-- 数据展示 -->
								<?php if($data != ''): if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<div class="np">
									<p style="width: 16%;"><?php echo $vo['name']; ?></p>
									<p style="width: 24%;"><?php echo $vo['code']; ?></p>
									<p style="width: 28%;"><?php echo $vo['key']; ?></p>
									<p style="width: 18%;"><?php echo $vo['number']; ?></p>
									<p style="width: 14%;">
										<?php if(strtotime(date("y-m-d h:i:s")) > strtotime($vo['n_time'])){echo '<span style="color:red">过期</span>';}else{echo '<span style="color:green">有效</span>';} ?></p>
								</div>
								<?php endforeach; endif; else: echo "" ;endif; endif; ?>
							</div>
						</div>

						<!--<div class="explain">
							说明：<span>这里是说明文字说明文字说明文字</span>
						</div>-->
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
		<script src="/static/myhome/js/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			function gradeChange() {
				var myselect = document.getElementById('pid');
				var index = myselect.selectedIndex;
				var text_t = document.querySelector('.text_t');
				var text = myselect.options[index].text;
				text_t.innerText = text + '：'
			}

			function sub() {
				// var content = $("#name").val();
				// if(content == null || content == undefined || content == "") {
				// 	alert('姓名不能为空!');
				// 	return false;
				// }
				$.ajax({
					type: "POST", //方法类型
					dataType: "json", //预期服务器返回的数据类型
					url: "<?php echo url('port/Certificate/index'); ?>", //url
					data: $('#form1').serialize(),
					success: function(data) {
						$(".np").remove();
						if(data == false) {
							alert('暂无此人数据');
							return false;
						}
						var result = eval("(" + data + ")");
						var startime = <?php 
						function getMillisecond() {
							list($t1, $t2) = explode(' ', microtime());
							return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);
						}
						echo getMillisecond();
		             ?>;
						for(var i = 0; i < result.length; i++) {
							var str = '<div class="np">' +
								'<p style="width:16%;">' + result[i]['name'] + '</p>' +
								'<p style="width:24%;">' + result[i]['code'] + '</p>' +
								'<p style="width:28%;">' + result[i]['key'] + '</p>' +
								'<p style="width:18%;">' + result[i]['number'] + '</p>';
							var zs = '<p style="width:14%;">'
							if(startime > Date.parse(result[i]['n_time'])) {
								zs += "<span style='color:red'>过期</span>";
							} else {
								zs += "<span style='color:green'>有效</span>";
							}
							var str = str + zs + '</p></div>';
							$(".li_list").append(str); //追加到你需要放在的位置
						}
					}
				});
			};
			
			//渐变线
			(function(){
				var table_bottom_H=document.querySelector('.table_bottom').offsetHeight;
				var bg_w=document.querySelector('.bg_w');
				bg_w.style.height=table_bottom_H+'px';
			})();
			
			//平衡左右高度
			(function(){
				var left_H=document.querySelector('.list').offsetHeight;
				var right_H=document.querySelector('.r_conter').offsetHeight;
				if(right_H>left_H){
					document.querySelector('.list').style.height=right_H+'px'
				}else{
					document.querySelector('.r_conter').style.height=left_H+'px'
				}
			})();
		</script>
	</body>

</html>