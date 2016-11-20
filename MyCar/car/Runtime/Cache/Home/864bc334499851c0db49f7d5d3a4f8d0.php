<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
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
            
            <ul class="nav navbar-nav navbar-right" id="product_bav">
                <li><a href="<?php echo U('Index/index');?>">HOME</a></li>
                <li><a href="<?php echo U('Index/conditions');?>">CONDITIONS</a></li>
                <li>
                    <a href="#">PRODUCT</a>
                    <ul class="active_product">
                        <li><a href="<?php echo U('Index/sale');?>">销售</a></li>
                        <li><a href="<?php echo U('Index/indexBaidu');?>">百度指数</a></li>
                        <li><a href="<?php echo U('Index/commetEmotion');?>">情感分析</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo U('Index/contact');?>">CONTACT</a></li>

            </ul>
        </div>
        <div class="navbar-right">
            <span class="username"><?php echo ($username); ?></span>
            <a href="<?php echo U('Login/login',array('page'=>"product"));?>" class="username">登陆 </a >
            <a href="<?php echo U('Login/logout',array('page'=>"product"));?>" class="username">注销 </a >
        </div>
    </div>
</div>            

<!-- product header section -->
<div id="product-header">
    <div class="container">
      <form method="post" action="<?php echo U('Index/commentEmotion');?>">
        <ul class="select">
            <li class="select-list" id="inform"><strong>评论情感数据</strong></li>
            <li class="select-list">
                <dl id="select2" >
                    <dd class="classification">车名：
                    <?php if(is_array($comment_name)): $i = 0; $__LIST__ = $comment_name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd ><a href="<?php echo U('Index/commentEmotion',array('name'=>$vo));?>" onclick="inital()"><?php echo ($vo); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
            </li>
            <li class="select-list">
                <dl id="select2" >
                    <dd class="classification">已选为：
                    <?php echo ($name); ?>
                    </dd>
                </dl>
            </li>
        </ul>
      </form>
    </div>
</div>

<!-- product chart -->
<div id="product">

    <div class="container">
        <div class="picture">
            <div id="piemap" style="height:400px;"></div>
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
<script src="/Mycar/Public/js/echarts-all.js"></script>
<script >
    var myChart = echarts.init(document.getElementById('piemap'));
    var positive=<?php echo ($emotion_positive); ?>,negative=<?php echo ($emotion_negative); ?>,neural=<?php echo ($emotion_neural); ?>;
    option = {
        title : {
            text: '情感分析状况',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            x : 'center',
            y : 'bottom',
            data:['负面','中性','正面']
        },

        color:['#E69F60', '#97B8DE', '#63C972'],
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType : {
                    show: true, 
                    type: ['pie', 'funnel']
                },
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        series : [
            {
                name:'半径模式',
                type:'pie',
                radius : [20, 110],
                center : ['50%', 200],
                roseType : 'radius',
                width: '40%',       // for funnel
                max: 40,            // for funnel
                itemStyle : {
                    normal : {
                        label : {
                            show : false
                        },
                        labelLine : {
                            show : false
                        }
                    },
                    emphasis : {
                        label : {
                            show : true
                        },
                        labelLine : {
                            show : true
                        }
                    }
                },

                data:[
                    {value:positive, name:'负面'},
                    {value:neural, name:'中性'},
                    {value:negative, name:'正面'}
                ]
            }
        ]
    };
      // 为echarts对象加载数据 
    myChart.setOption(option); 
</script>
<script src="/Mycar/Public/js/jquery-1.7.2.min.js"></script>
<script src="/Mycar/Public/js/script.js"></script>
</body>
</html>