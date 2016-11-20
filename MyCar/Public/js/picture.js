 var myChart = echarts.init(document.getElementById('piemap'));

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
                {value:10, name:'负面'},
                {value:5, name:'中性'},
                {value:15, name:'正面'}
            ]
        }
    ]
};

  // 为echarts对象加载数据 
                myChart.setOption(option); 