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
                        <li><a href="<?php echo U('Index/commentEmotion');?>">情感分析</a></li>
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
      <form method="post" action="<?php echo U('Index/indexBaidu');?>">
        <ul class="select">
            <li class="select-list" id="inform"><strong>百度指数数据</strong></li>
            <li class="select-list">
                <dl id="select1">
                    <dd class="classification">车型：</dd>
                    <dd><a href="<?php echo U('Index/indexBaidu',array('type'=>"all"));?>" onclick="inital()">全部</a></dd>
                    <dd><a href="<?php echo U('Index/indexBaidu',array('type'=>"little"));?>" onclick="inital()">小型</a></dd>
                    <dd><a href="<?php echo U('Index/indexBaidu',array('type'=>"compact"));?>" onclick="inital()">紧凑型SUV</a></dd>
                    <dd><a href="<?php echo U('Index/indexBaidu',array('type'=>"medium"));?>" onclick="inital()">中型SUV</a></dd>
                    <dd><a href="<?php echo U('Index/indexBaidu',array('type'=>"medium-long"));?>" onclick="inital()">中长型</a></dd>
                    <dd><a href="<?php echo U('Index/indexBaidu',array('type'=>"long"));?>" onclick="inital()">全尺寸</a></dd>

                </dl>
            </li>
            <li class="select-list">
                <dl id="select2" >
                    <dd class="classification">车名：
                    <?php if(is_array($indexname)): $i = 0; $__LIST__ = $indexname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd ><a href="<?php echo U('Index/indexBaidu',array('name'=>$vo,'type'=>$type));?>" onclick="inital()"><?php echo ($vo); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
                    </dd>
                </dl>
            </li>
            <li class="select-list">
                <dl id="select2" >
                    <dd class="classification">已选为：
                    <?php echo ($indexid); ?>
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
            <div id="insert2" style="height:400px;"></div>
            <a href="<?php echo U('Login/isLogin',array('download'=>"index"));?>" ><h5>下载数据</h5></a>
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
    // 基于准备好的dom，初始化echarts图表
    var myChart = echarts.init(document.getElementById('insert2'));
    var indexdate=<?php echo ($indexdate); ?>,index=<?php echo ($index); ?>;
    option = {
        title:{
             text:'百度指数',
             x:'left',
        },

    tooltip : {
        trigger: 'axis'
    },
    legend: {
        show:'left',
        data:['百度指数']
    },
    toolbox: {
        show : true,
        orient: 'horizontal',      // 布局方式，默认为水平布局，可选为：
                                   // 'horizontal' ¦ 'vertical'
        x: 'right',                // 水平安放位置，默认为全图右对齐，可选为：
                                   // 'center' ¦ 'left' ¦ 'right'
                                   // ¦ {number}（x坐标，单位px）
        y: 'top',                  // 垂直安放位置，默认为全图顶端，可选为：
                                   // 'top' ¦ 'bottom' ¦ 'center'
                                   // ¦ {number}（y坐标，单位px）
        color : ['#1e90ff','#22bb22','#92DEB6','#d2691e'],
        backgroundColor: 'rgba(0,0,0,0)', // 工具箱背景颜色
        borderColor: '#ccc',       // 工具箱边框颜色
        borderWidth: 0,            // 工具箱边框线宽，单位px，默认为0（无边框）
        padding: 5,                // 工具箱内边距，单位px，默认各方向内边距为5，
        showTitle: true,
        feature : {
            mark : {
                show : true,
                title : {
                    mark : '辅助线-开关',
                    markUndo : '辅助线-删除',
                    markClear : '辅助线-清空'
                },
                lineStyle : {
                    width : 1,
                    color : '#1e90ff',
                    type : 'dashed'
                }
            },
            dataZoom : {
                show : true,
                title : {
                    dataZoom : '区域缩放',
                    dataZoomReset : '区域缩放-后退'
                }
            },
            dataView : {
                show : true,
                title : '数据视图',
                readOnly: true,
                lang : ['数据视图', '关闭', '刷新'],
                optionToContent: function(opt) {
                    var axisData = opt.xAxis[0].data;
                    var series = opt.series;
                    var table = '<table style="width:100%;text-align:center"><tbody><tr>'
                                 + '<td>时间</td>'
                                 + '<td>' + series[0].name + '</td>'
                                 + '<td>' + series[1].name + '</td>'
                                 + '</tr>';
                    for (var i = 0, l = axisData.length; i < l; i++) {
                        table += '<tr>'
                                 + '<td>' + axisData[i] + '</td>'
                                 + '<td>' + series[0].data[i] + '</td>'
                                 + '<td>' + series[1].data[i] + '</td>'
                                 + '</tr>';
                    }
                    table += '</tbody></table>';
                    return table;
                }
            },
            magicType: {
                show : true,
                title : {
                    line : '动态类型切换-折线图',
                    bar : '动态类型切换-柱形图',
                    stack : '动态类型切换-堆积',
                    tiled : '动态类型切换-平铺'
                },
                type : ['line', 'bar', 'stack', 'tiled']
            },
            restore : {
                show : true,
                title : '还原',
                color : 'black'
            },
            saveAsImage : {
                show : true,
                title : '保存为图片',
                type : 'jpeg',
                lang : ['点击本地保存'] 
            },

        }
    },
    calculable : true,
    dataZoom : {
        show : true,
        realtime : true,
        start : 70,
        end : 100
    },
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : function (){
                var list = [];
                for (var i = 0; i < indexdate.length; i++) {
                    list.push(indexdate[i]);//同上，random的一些数据
                }
                return list;
            }()//横坐标的日期，需要从数据库里面读取
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'百度指数',
            type:'line',
            smooth:true,
            itemStyle:{
                normal:{
                    color:'#F5DB93',
                    lineStyle:{
                        color:'#F5DB93',
                    }
                }
            },
            data:function (){
                var list = [];
                for (var i = 0; i <index.length; i++) {
                    list.push(index[i]);//同上，random的一些数据
                }
                return list;
            }()
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