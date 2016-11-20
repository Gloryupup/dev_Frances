<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>汽车销售大数据平台</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- stylesheet css -->
    <link rel="stylesheet" href="/Mycar/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Mycar/Public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Mycar/Public/css/nivo-lightbox.css">
    <link rel="stylesheet" href="/Mycar/Public/css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="/Mycar/Public/css/templatemo-style.css">
    <link href="/Mycar/Public/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
    <style type="text/css">
        #page {
            margin: 0 auto;
            width: 1300px;
            height: 500px;
            background: #fff;
            margin-bottom: 20px;
            border: 1px solid #777;
            box-shadow: #999 1px 1px 3px;
        }
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
                <li><a href="<?php echo U('Index/index');?>"  class="active">HOME</a></li>
                <li><a href="<?php echo U('Index/conditions');?>" >CONDITIONS</a></li>
                <li><a href="<?php echo U('Index/product');?>" >PRODUCT</a></li>
                <li><a href="<?php echo U('Index/contact');?>" >CONTACT</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <span class="username"><?php echo ($username); ?></span>
            <a href="<?php echo U('Login/login',array('page'=>"index"));?>" class="username">登陆 </a >
            <a href="<?php echo U('Login/logout',array('page'=>"index"));?>" class="username">注销 </a >
        </div>
    </div>
</div>  

<!-- home section pictures -->
<div class="htmleaf-container" id="slider">
        <div id="page">
            <div id="content">
                <div class="border_box">
                    <div class="box_skitter box_skitter_large"  style="width:1300px; height:500px;">
                          <ul>
                        　<marquee align="left" behavior="scroll" bgcolor="#FF0000" direction="left" height="500" width="1300" hspace="50" vspace="20" loop="-1" scrollamount="10" scrolldelay="20" onMouseOut="this.start()" onMouseOver="this.stop()"> 
                            <li><img src="/Mycar/Public/images/001.jpg" class="circles" /><div class="label_text"></div></li>
                            <li><img src="/Mycar/Public/images/002.jpg" class="circlesInside" /><div class="label_text"></div></li>
                            <li><img src="/Mycar/Public/images/003.jpg" class="circlesRotate" /><div class="label_text"></div></li>
                            <li><img src="/Mycar/Public/images/004.jpg" class="cubeShow" /><div class="label_text"></div></li>　  
                          </marquee>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- divider section -->
<div class="divider">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6" onclick="javascript:window.location.href='conditions.html'" style="margin-top:58px">
                <div class="divider-wrapper divider-one" style="background-color:#437A8C;">
                    <i class="fa fa-laptop"></i>
                    <h2>CONDITIONS</h2>
                    <p>热度排行榜，帮你了解最热门车型</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6"  onclick="javascript:window.location.href='product.html'" style="margin-top:58px">
                <div class="divider-wrapper divider-two" style="background-color:#545753;">
                    <i class="fa fa-mobile"></i>
                    <h2>PRODUCTS</h2>
                    <p>上千车型精准数据展示，图表展示更直观</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6"  onclick="javascript:window.location.href='contact.html'" style="margin-top:58px">
                <div class="divider-wrapper divider-three" style="background-color:#945357;">
                    <i class="fa fa-life-ring"></i>
                    <h2>CONTACT US</h2>
                    <p>与我们联系，为您提供最有价值资讯</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="copyrights">Collect from 2014计算机科学与技术Glory小组</a></div>

<!-- footer section -->
<footer>
    <div class="container">
        <div class="row">
        
            <div class="col-md-5 col-sm-4">
                <img src="/Mycar/Public/images/logo.png" class="img-responsive" alt="logo">
                <p><i class="fa fa-phone"></i> 18301716708/18221967178</p>
                <p><i class="fa fa-envelope-o"></i>xingkong978@foxmail.com</p>
              <p><i class="fa fa-globe"></i> https://github.com/Gloryupup/Glory</p>
            </div>
            
        </div>
    </div>
</footer>

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
<script type="text/javascript" src="/Mycar/Public/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/Mycar/Public/js/jquery.skitter.min.js"></script>
<script type="text/javascript">
       $(document).ready(function () {
            $('.box_skitter_large').skitter({
                theme: 'default',
                dots: true,
                preview: true,
                numbers_align: 'center'
            });
        });
</script>

</body>

</html>