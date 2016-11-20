<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
	<meta charset="utf-8"/>
	<title>汽车数据平台管理员</title>
	<link rel="stylesheet" type="text/css" href="/MyCar/Public/css/layout.css" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="/MyCar/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/MyCar/Public/js/hideshow.js"></script>
	<script type="text/javascript" src="/MyCar/Public/js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title">汽车数据平台</h1>
			<h2 class="section_title">管理列表</h2><div class="btn_view_site"><a href="quit">退出登录</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
		</div>
		<div class="breadcrumbs_container">
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column" style="position: relative;">
		<br>
		<h3>用户管理</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="<?php echo U('User/userList');?>">用户列表</a></li>
			<li class="icn_edit_article"><a href="<?php echo U('User/userPreAdd');?>">新增用户</a></li>
		</ul>
		
		<footer style="position: absolute; bottom: 0; width:100%;font-size: 20px">
			<hr />
			<p><strong>Copyright &copy; 2016 Glory</strong></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
	<h4 class="alert_info"><?php echo ($time); ?>好，管理员！今天是<?php echo ($date); ?>，又是干劲满满的一天~~~</h4>
	<article class="module width_full">
		<header><h3>用户列表</h3></header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
					<thead> 
						<tr> 
							<th></th> 
							<th width="700px">用户名</th>
							<th>操作</th> 
						</tr> 
					</thead> 
					<tbody>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td></td>
								<td><?php echo ($vo["username"]); ?></td>
								<td>
									<a href="<?php echo U('User/userPreEdit','','');?>/userid/<?php echo ($vo['userid']); ?>">
										<input type="image" src="/MyCar/Public/images/icn_edit.png" title="修改">
									</a>
									<a href="<?php echo U('User/userDelete','','');?>/userid/<?php echo ($vo['userid']); ?>" onclick="javascript:return del()">
										<input type="image" src="/MyCar/Public/images/icn_trash.png" title="删除">
									</a>
								</td> 
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody> 
				</table>
			</div><!-- end of #tab1 -->
		</div><!-- end of .tab_container -->
	</article><!-- end of stats article -->
	<script>
		function del() {
			var msg = "您真的确定要删除吗？\n\n请确认！";
			if (confirm(msg) == true) {
				return true;
			} else {
				return false;
			}
		}
	</script>

	</section>


</body>

</html>