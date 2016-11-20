<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- stylesheet css -->
	<link rel="stylesheet" href="/Mycar/Public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Mycar/Public/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Mycar/Public/css/nivo-lightbox.css">
	<link rel="stylesheet" href="/Mycar/Public/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="/Mycar/Public/css/templatemo-style.css">	
	<link rel="stylesheet" type="text/css" href="/Mycar/Public/css/style.css">

	<style type="text/css">
	   .parent p{font-size:22px} 
	</style>

</head>
<body>
	
<!-- navigation -->

<div class="container" >
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header" >
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="/Mycar/Public/images/logo.png" class="img-responsive" alt="logo"></a>
            <h1>汽车销售数据平台</h1>
        </div>
        <div class="collapse navbar-collapse">
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo U('Index/index');?>">HOME</a></li>
                <li><a href="<?php echo U('Index/conditions');?>" >CONDITIONS</a></li>
                <li><a href="<?php echo U('Index/product');?>" >PRODUCT</a></li>
                <li><a href="<?php echo U('Index/contact');?>" class="active" >CONTACT</a></li>
            </ul>
        </div>
        <div class="navbar-right">
        	<span class="username"><?php echo ($username); ?></span>
            <a href="<?php echo U('Login/login',array('page'=>"contact"));?>" class="username">登陆 </a >
            <a href="<?php echo U('Login/logout',array('page'=>"contact"));?>" class="username">注销 </a >
        </div>
    </div>
</div>  


<!-- contact section -->
<div class="container">
	<div id="contact">
		<div class="row" style="margin-left:35px">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Get in touch</h2>
				<div class="parent"> 
                <p>If you want to get more data about cars, please cantact us!</p> 
                </div>
			</div>
			<div class="col-md-8 col-sm-8 mt30">
				<form action="#" method="post" role="form">
					<div class="col-md-6 col-sm-6">
                        <label for="name">NAME</label>
                        <input name="name" type="text" class="form-control" id="name">
                      <label for="email">EMAIL</label>
                        <input name="email" type="email" class="form-control" id="email">
					</div>
					<div class="col-md-6 col-sm-6">
						<label for="message">MESSAGE</label>
						<textarea name="message" rows="6" class="form-control" id="message"></textarea>
					</div>
                    <div class="col-md-6 col-sm-6">
                    	<button type="submit" name="submit" class="btn btn-default">SEND</button>
                    </div>
				</form>
			</div>
			<div class="col-md-4 col-sm-4 address">
				<div>
					<h3>Email</h3>
					<p>xingkong978@foxmail.com</p>
				</div>
				<div>
					<h3>Phones</h3>
					<p>李小姐18301716708 | 吴小姐18221967178</p>
				</div>
			</div>
		</div>
	</div>
	

<!-- map -->
<div> 
  <iframe name="地图" align="center" frameborder="0" scrolling="no" border="0" marginwidth="0" width="960" 
          style="border:none;" frameborder="1" height="400" src="map.html"></iframe>
</div> 


<!-- team section -->
<div id="team">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>我们的团队！</h2>
			</div>
         </div>
        
            <div class="row mt30">
            
			<div class="col-md-2 col-sm-2 col-xs-2" >
				<div class="team-wrapper">
					<img src="/Mycar/Public/images/team3.jpg" class="img-responsive" alt="team img">
					<h3>吴漏</h3>
					<h4>前端负责人</h4>
				</div>
			</div>

			<div class="col-md-2 col-sm-2 col-xs-2" >
				<div class="team-wrapper">
					<img src="/Mycar/Public/images/team4.jpg" class="img-responsive" alt="team img">
					<h3>李岩</h3>
					<h4>前端负责人</h4>
				</div>
			</div>
            

			<div class="col-md-2 col-sm-2 col-xs-2">
				<div class="team-wrapper">
					<img src="/Mycar/Public/images/team1.jpg" class="img-responsive" alt="team img">
					<h3>边俐菁</h3>
					<h4>后端负责人</h4>
				</div>
			</div>

			<div class="col-md-2 col-sm-2 col-xs-2">
				<div class="team-wrapper">
					<img src="/Mycar/Public/images/team6.jpg" class="img-responsive" alt="team img">
					<h3>朱荣鑫</h3>
					<h4>后端负责人</h4>
				</div>
		    </div>

			<div class="col-md-2 col-sm-2 col-xs-2"  style="clear:both;">
				<div class="team-wrapper">
					<img src="/Mycar/Public/images/team2.jpg" class="img-responsive" alt="team img">
					<h3>刘佳琪</h3>
					<h4>数据库负责人</h4>
				</div>
			</div>
            
            <div class="col-md-2 col-sm-2 col-xs-2">
				<div class="team-wrapper">
					<img src="/Mycar/Public/images/team5.jpg" class="img-responsive" alt="team img">
					<h3>侯天童</h3>
					<h4>数据库负责人</h4>
				</div>
			</div>

            <div class="col-md-2 col-sm-2 col-xs-2">
				<div class="team-wrapper">
					<img src="/Mycar/Public/images/team7.jpg" class="img-responsive" alt="team img">
					<h3>赵总</h3>
					<h4>预测算法</h4>
				</div>
			</div>
         </div>
		</div>
</div>
</div>
<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<p>Copyright 上海财经大学2014级计算机科学与技术Glory小组</p>
			</div>
		</div>
	</div>
</div>

<!-- javascript js -->	
<script src="/Mycar/Public/js/jquery.js"></script>
<script src="/Mycar/Public/js/bootstrap.min.js"></script>	
<script src="/Mycar/Public/js/nivo-lightbox.min.js"></script>
</body>
</html>