// 基于准备好的dom，初始化echarts图表
            var myChart = echarts.init(document.getElementById('insert'));
            option = {
            	title:{
                     text:'舆情综合指数',
                     x:'left',
            	},

    tooltip : {
        trigger: 'axis'
    },
    legend: {
        show:'left',
        data:['媒体关注度']
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
            myTool : {
                show : true,
                title : '自定义扩展方法',
                icon : 'image://../asset/ico/favicon.png',
                onclick : function (){
                    alert('myToolHandler')
                }
            }
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
            data : ['06-12', '06-13', '06-14', '06-15', '06-16', '06-17', '06-18',
                   '06-19', '06-20', '06-21', '06-22', '06-23', '06-24', '06-25',
                   '06-26', '06-27'],//横坐标的日期，需要从数据库里面读取
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'媒体关注度',
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
                for (var i = 1; i <= 30; i++) {
                    list.push(Math.round(Math.random()* 10));//同上，random的一些数据
                }
                return list;
            }()
        }
    ]
};
        
            

                // 为echarts对象加载数据 
                myChart.setOption(option); 