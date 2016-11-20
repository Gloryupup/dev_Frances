<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="content-type" content="text/html;charset=gb2312">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- stylesheet css -->
    <link rel="stylesheet" href="/Mycar/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Mycar/Public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Mycar/Public/css/nivo-lightbox.css">
    <link rel="stylesheet" href="/Mycar/Public/css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="/Mycar/Public/css/templatemo-style.css">
    <link rel="stylesheet" type="text/css" href="/Mycar/Public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/Mycar/Public/css/main.css"/>
    <script type="text/javascript" src="/Mycar/Public/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#dropdown p").click(function(){
                var ul = $("#dropdown ul");
                if(ul.css("display")=="none"){
                    ul.slideDown("fast");
                }else{
                    ul.slideUp("fast");
                }
            });
            $("#dropdown ul li a").click(function(){
                var txt = $(this).text();
                $("#dropdown p").html(txt);
                var value = $(this).attr("rel");
                $("#dropdown ul").hide();
           });
        });
    </script>
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
                <li><a href="<?php echo U('Index/conditions');?>" class="active" >CONDITIONS</a></li>
                <li><a href="<?php echo U('Index/product');?>" >PRODUCT</a></li>
                <li><a href="<?php echo U('Index/contact');?>" >CONTACT</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <span class="username"><?php echo ($username); ?></span>
            <a href="<?php echo U('Login/login',array('page'=>"conditions"));?>" class="username">登陆 </a >
            <a href="<?php echo U('Login/logout',array('page'=>"conditions"));?>" class="username">注销 </a >
        </div>
    </div>
</div>      

<!-- rank -->
<div class="container">
    <div class="box2" id="movie_rank" style="margin-top:40px;float:left">
        <h2>百度指数排行榜</h2>
        <div class="inner" >
            <ul class="rank_list">
                <li><a>车型</a><span>热度</span></li>
                <li class="top3"><em>1</em><a><?php echo ($index_rank[0]["name"]); ?></a><span><?php echo ($index_rank[0]["total"]); ?></span></li>
                <li class="top3"><em>2</em><a><?php echo ($index_rank[1]["name"]); ?></a><span><?php echo ($index_rank[1]["total"]); ?></span></li>
                <li class="top3"><em>3</em><a><?php echo ($index_rank[2]["name"]); ?></a><span><?php echo ($index_rank[2]["total"]); ?></span></li>
                <li><em>4</em><a><?php echo ($index_rank[3]["name"]); ?></a><span><?php echo ($index_rank[3]["total"]); ?></span></li>
                <li><em>5</em><a><?php echo ($index_rank[4]["name"]); ?></a><span><?php echo ($index_rank[4]["total"]); ?></span></li>
                <li><em>6</em><a><?php echo ($index_rank[5]["name"]); ?></a><span><?php echo ($index_rank[5]["total"]); ?></span></li>
                <li><em>7</em><a><?php echo ($index_rank[6]["name"]); ?></a><span><?php echo ($index_rank[6]["total"]); ?></span></li>
                <li><em>8</em><a><?php echo ($index_rank[7]["name"]); ?></a><span><?php echo ($index_rank[7]["total"]); ?></span></li>
                <li><em>9</em><a><?php echo ($index_rank[8]["name"]); ?></a><span><?php echo ($index_rank[8]["total"]); ?></span></li>
                <li><em>10</em><a><?php echo ($index_rank[9]["name"]); ?></a><span><?php echo ($index_rank[9]["total"]); ?></span></li>
            </ul>
         <div id="dropdown" style="margin-left:270px">
              <p>年份</p>
              <ul>
                 <li><a href="#" rel="1">2011</a></li>
                 <li><a href="#" rel="2">2012</a></li>
                 <li><a href="#" rel="3">2013</a></li>
                 <li><a href="#" rel="4">2014</a></li>
                 <li><a href="#" rel="5">2015</a></li>
              </ul>
         </div>
        </div>
    </div>

    <div class="box2" id="movie_rank"  style="margin-top:40px;float:left">
        <h2>销量排行榜</h2>
        <div class="inner" >
            <ul class="rank_list">
                <li><a>车型</a><span>月销售量</span></li>
                <li class="top3"><em>1</em><a><?php echo ($sales_rank[0]["name"]); ?></a><span><?php echo ($sales_rank[0]["sales"]); ?></span></li>
                <li class="top3"><em>2</em><a><?php echo ($sales_rank[1]["name"]); ?></a><span><?php echo ($sales_rank[1]["sales"]); ?></span></li>
                <li class="top3"><em>3</em><a><?php echo ($sales_rank[2]["name"]); ?></a><span><?php echo ($sales_rank[2]["sales"]); ?></span></li>
                <li><em>4</em><a><?php echo ($sales_rank[3]["name"]); ?></a><span><?php echo ($sales_rank[3]["sales"]); ?></span></li>
                <li><em>5</em><a><?php echo ($sales_rank[4]["name"]); ?></a><span><?php echo ($sales_rank[4]["sales"]); ?></span></li>
                <li><em>6</em><a><?php echo ($sales_rank[5]["name"]); ?></a><span><?php echo ($sales_rank[5]["sales"]); ?></span></li>
                <li><em>7</em><a><?php echo ($sales_rank[6]["name"]); ?></a><span><?php echo ($sales_rank[6]["sales"]); ?></span></li>
                <li><em>8</em><a><?php echo ($sales_rank[7]["name"]); ?></a><span><?php echo ($sales_rank[7]["sales"]); ?></span></li>
                <li><em>9</em><a><?php echo ($sales_rank[8]["name"]); ?></a><span><?php echo ($sales_rank[8]["sales"]); ?></span></li>
                <li><em>10</em><a><?php echo ($sales_rank[9]["name"]); ?></a><span><?php echo ($sales_rank[9]["sales"]); ?></span></li>
            </ul>
            <div id="dropdown" style="margin-left:270px">
              <p>年份</p>
              <ul>
                 <li><a href="#" rel="1">2011</a></li>
                 <li><a href="#" rel="2">2012</a></li>
                 <li><a href="#" rel="3">2013</a></li>
                 <li><a href="#" rel="4">2014</a></li>
                 <li><a href="#" rel="5">2015</a></li>
              </ul>
         </div>
        </div>
    </div>

    <div class="box2" id="movie_rank"  style="margin-top:40px;float:left">
        <h2>评论情感指数排行榜</h2>
        <div class="inner" >
            <ul class="rank_list">
                <li><a>车型</a><span>平均情感</span></li>
                <li class="top3"><em>1</em><a><?php echo ($emotion[0]["name"]); ?></a><span><?php echo ($emotion[0]["avg"]); ?></span></li>
                <li class="top3"><em>2</em><a><?php echo ($emotion[1]["name"]); ?></a><span><?php echo ($emotion[1]["avg"]); ?></span></li>
                <li class="top3"><em>3</em><a><?php echo ($emotion[2]["name"]); ?></a><span><?php echo ($emotion[2]["avg"]); ?></span></li>
                <li><em>4</em><a><?php echo ($emotion[3]["name"]); ?></a><span><?php echo ($emotion[3]["avg"]); ?></span></li>
                <li><em>5</em><a><?php echo ($emotion[4]["name"]); ?></a><span><?php echo ($emotion[4]["avg"]); ?></span></li>
                <li><em>6</em><a><?php echo ($emotion[5]["name"]); ?></a><span><?php echo ($emotion[5]["avg"]); ?></span></li>
                <li><em>7</em><a><?php echo ($emotion[6]["name"]); ?></a><span><?php echo ($emotion[6]["avg"]); ?></span></li>
                <li><em>8</em><a><?php echo ($emotion[7]["name"]); ?></a><span><?php echo ($emotion[7]["avg"]); ?></span></li>
                <li><em>9</em><a><?php echo ($emotion[8]["name"]); ?></a><span><?php echo ($emotion[8]["avg"]); ?></span></li>
                <li><em>10</em><a><?php echo ($emotion[9]["name"]); ?></a><span><?php echo ($emotion[9]["avg"]); ?></span></li>
            </ul>
             <div id="dropdown" style="margin-left:270px">
              <p>年份</p>
              <ul>
                 <li><a href="#" rel="1">2011</a></li>
                 <li><a href="#" rel="2">2012</a></li>
                 <li><a href="#" rel="3">2013</a></li>
                 <li><a href="#" rel="4">2014</a></li>
                 <li><a href="#" rel="5">2015</a></li>
          </ul>
         </div>
        </div>
    </div>
</div>
<!-- javascript js -->  
<script src="/Mycar/Public/js/jquery.js"></script>
<script src="/Mycar/Public/js/bootstrap.min.js"></script> 
<script src="/Mycar/Public/js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="/Mycar/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Mycar/Public/js/script.js"></script>
</body>
</html>