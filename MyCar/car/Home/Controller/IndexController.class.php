<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
           $username=session('login');
           $this->assign('username',$username);
           $this->display();
    }
    public function product(){
        //车型名称
        $saleid = $_REQUEST['name'];
        $type=$_REQUEST["type"];
        $type_record=$_REQUEST["type_record"];
        $little=['众泰5008','瑞麒X1'];
        $compact=[];
        $medium=['日产逍客','现代ix35','起亚智跑','大众途观','奔驰GLK级'];
        $medium_long=['奥迪Q5','比亚迪S6','日产楼兰'];
        $long=['别克昂科威','哈弗H9'];
        $all=array_merge($little,$compact,$medium,$medium_long,$long);
        if($type=="all"){
            $salename=$all;
            if($saleid=="")
                $saleid=$all[0];
        }else if($type=="little"){
            $salename=$little;
            if($saleid=="")
                $saleid=$little[0];
        }else if($type=="medium"){
            $salename=$medium;
            if($saleid=="")
                $saleid=$medium[0];
        }else if($type=="medium-long"){
            $salename=$medium_long;
            if($saleid=="")
                $saleid=$medium_long[0];
        }else if($type=="long"){
            $salename=$long;
            if($saleid=="")
                $saleid=$long[0];
        }else{
            if($type_record=="all"){
                $salename=$all;
            }
            else if($type_record=="little"){
                $salename=$little;
                
            }
            else if($type_record=="medium"){
                $salename=$medium;
               
            }
            else if($type_record=="medium-long"){
                $salename=$medium_long;
               
            }
            else if($type_record=="long"){
                $salename=$long;
               
            }
            //设置默认情况下为全部类型下的众泰5008
            if($type_record==""){
                $salename=$all;
                $type="all";
                $saleid=$all[0];
            }

        }
        //销售数据
        $where['name']=$saleid;
        $saleTime=M('sales')->where($where)->order('time asc')->getField('time',true);
        $sale=M('sales')->where($where)->order('time asc')->getField('sales',true);
        $saleMintime=$saleTime[0];
        $saleMaxtime=$saleTime[count($saleTime)-1];
        list($y1, $m1, $d1) = explode('/', $saleMintime); 
        list($y2, $m2, $d2) = explode('/', $saleMaxtime); 
        $salemonth = ($y2 - $y1) * 12 + $m2 - $m1; //两个时间之间相差的月数
        $saleMintime=strtotime(date('Y-m',strtotime($saleMintime)));
        //$saledate[]记录销售数据的横坐标
        for($i=0;$i<$salemonth;$i++){
            $saledate[]=date('Y-m', strtotime("+$i month",$saleMintime));
        }
        $k=0;
        //对具体车型的销售时间的标准化
        foreach ($saleTime as $key => $value) {
            $dateFind[]=date('Y-m',strtotime($value));
        }
        //对销售数据纵坐标销售量的处理，当月不存在销售数据则设为0
        //$sale记录销售量
        foreach ($saledate as $key => $value) {
            if(in_array($value, $dateFind)){
               $sales[]=$sale[$k];
               $k++;
            }else{
                $sales[]=0;//当月没有销售数据时认为销售量为0
            }
        }
        $username=session('login');
        $this->assign('username',$username);
        $sale=json_encode($sale);
        $saledate=json_encode($saledate);
        $this->assign('type',$type);
        $this->assign('salename',$salename);
        $this->assign('sale',$sale);
        $this->assign('saleid',$saleid);
        $this->assign('saledate',$saledate);
        $this->display();
    }
    public function sale(){
        //车型名称
        $saleid = $_REQUEST['name'];
        $type=$_REQUEST["type"];
        $type_record=$_REQUEST["type_record"];
        $little=['众泰5008','瑞麒X1'];
        $compact=[];
        $medium=['日产逍客','现代ix35','起亚智跑','大众途观','奔驰GLK级'];
        $medium_long=['奥迪Q5','比亚迪S6','日产楼兰'];
        $long=['别克昂科威','哈弗H9'];
        $all=array_merge($little,$compact,$medium,$medium_long,$long);
        if($type=="all"){
            $salename=$all;
            if($saleid=="")
                $saleid=$all[0];
        }else if($type=="little"){
            $salename=$little;
            if($saleid=="")
                $saleid=$little[0];
        }else if($type=="medium"){
            $salename=$medium;
            if($saleid=="")
                $saleid=$medium[0];
        }else if($type=="medium-long"){
            $salename=$medium_long;
            if($saleid=="")
                $saleid=$medium_long[0];
        }else if($type=="long"){
            $salename=$long;
            if($saleid=="")
                $saleid=$long[0];
        }else{
            if($type_record=="all"){
                $salename=$all;
            }
            else if($type_record=="little"){
                $salename=$little;
                
            }
            else if($type_record=="medium"){
                $salename=$medium;
               
            }
            else if($type_record=="medium-long"){
                $salename=$medium_long;
               
            }
            else if($type_record=="long"){
                $salename=$long;
               
            }
            //设置默认情况下为全部类型下的众泰5008
            if($type_record==""){
                $salename=$all;
                $type="all";
                $saleid=$all[0];
            }

        }
        //销售数据
        $where['name']=$saleid;
        $saleTime=M('sales')->where($where)->order('time asc')->getField('time',true);
        $sale=M('sales')->where($where)->order('time asc')->getField('sales',true);
        $saleMintime=$saleTime[0];
        $saleMaxtime=$saleTime[count($saleTime)-1];
        list($y1, $m1, $d1) = explode('/', $saleMintime); 
        list($y2, $m2, $d2) = explode('/', $saleMaxtime); 
        $salemonth = ($y2 - $y1) * 12 + $m2 - $m1; //两个时间之间相差的月数
        $saleMintime=strtotime(date('Y-m',strtotime($saleMintime)));
        //$saledate[]记录销售数据的横坐标
        for($i=0;$i<$salemonth;$i++){
            $saledate[]=date('Y-m', strtotime("+$i month",$saleMintime));
        }
        $k=0;
        //对具体车型的销售时间的标准化
        foreach ($saleTime as $key => $value) {
            $dateFind[]=date('Y-m',strtotime($value));
        }
        //对销售数据纵坐标销售量的处理，当月不存在销售数据则设为0
        //$sale记录销售量
        foreach ($saledate as $key => $value) {
            if(in_array($value, $dateFind)){
               $sales[]=$sale[$k];
               $k++;
            }else{
                $sales[]=0;//当月没有销售数据时认为销售量为0
            }
        }
        $sale=json_encode($sale);
        $saledate=json_encode($saledate);
        $username=session('login');
        $this->assign('username',$username);
        $this->assign('type',$type);
        $this->assign('salename',$salename);
        $this->assign('sale',$sale);
        $this->assign('saleid',$saleid);
        $this->assign('saledate',$saledate);
        $this->display();
    }
    public function indexBaidu(){
    	$indexid = $_REQUEST['name'];
        $type=$_REQUEST["type"];
        $type_record=$_REQUEST["type_record"];
        $little=['瑞麒X1','瑞风s3','比亚迪元'];//检查名字
        $compact=['景逸x3','MINI Countryman','mini coupe','别克昂科拉','长安CS35','雪佛兰创酷','哈弗h6','宝骏560','北京现代ix25','英致G3','中华V5','本田CR-V','海马S7','讴歌RDX','力帆X60'];
        $medium=['宝马X3','大众途观'];
        $medium_long=['众泰T600','猎豹Q6','奥迪Q5','大切诺基','凯迪拉克SRX',
        '讴歌MDX','讴歌ZDX','宝马X5','比亚迪S6','猎豹CS6','沃尔沃XC60','沃尔沃XC90','丰田汉兰达','全新胜达','陆风X8','陆风X6','江铃驭胜','三菱帕杰罗','奔驰G级','奔驰M级','广汽传祺GS5'];
        $long=['奥迪Q7','兰德酷路泽'];
        $all=array_merge($little,$compact,$medium,$medium_long,$long);
        if($type=="all"){
            $indexname=$all;
            if($indexid=="")
                $indexid=$all[0];
        }else if($type=="little"){
            $indexname=$little;
            if($indexid=="")
                $indexid=$little[0];
        }else if($type=="compact"){
            $indexname=$compact;
            if($indexid=="")
                $indexid=$compact[0];
        }else if($type=="medium"){
            $indexname=$medium;
            if($indexid=="")
                $indexid=$medium[0];
        }else if($type=="medium-long"){
            $indexname=$medium_long;
            if($indexid=="")
                $indexid=$medium_long[0];
        }else if($type=="long"){
            $indexname=$long;
            if($saleid=="")    
                $indexid=$long[0];
        }else{
            if($type_record=="all"){
                $indexname=$all;
            }
            else if($type_record=="little"){
                $indexname=$little;
                
            }else if($type_record=="compact"){
                $indexname=$compact;
                
            }else if($type_record=="medium"){
                $indexname=$medium;
                
            }
            else if($type_record=="medium-long"){
                $indexname=$medium_long;
               
            }
            else if($type_record=="long"){
                $indexname=$long;
               
            }
            //设置默认情况下为全部类型下的众泰5008
            if($type_record==""){
                $indexname=$all;
                $type="all";
                $indexid=$all[0];
            }

        }
        if($indexid=="MINI+Countryman")
            $indexid="MINI Countryman";
        if($indexid=="mini+coupe")
             $indexid="mini coupe";
        //百度指数
        $t['name']=$indexid;//限定型号
        $indexTime=M('baidu_index')->where($t)->getField('time',true);
        $search=M('baidu_index')->where($t)->getField('search',true);
        $indexMintime=$indexTime[0];
        $indexMaxtime=$indexTime[count($indexTime)-1];
        $indexMaxtime=strtotime(date('Y-m-d',strtotime($indexMaxtime)));
        $indexMintime=strtotime(date('Y-m-d',strtotime($indexMintime)));
        $day=($indexMaxtime-$indexMintime)/3600/24;//计算最早和最晚的时间相差天数
        //indexdate记录百度指数上的横轴
        for($i=0;$i<=$day;$i++){
            $indexdate[]=date('Y-m-d', strtotime("+$i day",$indexMintime));
        }
        $k=0;
        //对具体车型的销售时间的标准化
        foreach ($indexTime as $key => $value) {
            $dateindexFind[]=date('Y-m-d',strtotime($value));
        }
        //$index记录纵轴
        foreach ($indexdate as $key => $value) {
            if(in_array($value, $dateindexFind)){
               $index[]=$search[$k];
               $k++;
            }else{
                $index[]=0;//当月没有销售数据时认为销售量为0
            }
        }
       
        $index=json_encode($index);
        $indexdate=json_encode($indexdate);
        $username=session('login');
        $this->assign('username',$username);
        $this->assign('indexname',$indexname);
        $this->assign('indexdate',$indexdate);
        $this->assign('index',$index);
        $this->assign('indexid',$indexid);
        $this->assign('type',$type);
    	$this->display();
    }
    public function commentEmotion(){
        $name=$_REQUEST['name'];
        if($name=="MINI+COUNTRYMAN"||$name=="")
            $name="MINI COUNTRYMAN";
        $comment_name=['MINI COUNTRYMAN','猎豹CS7','永源A380','奥迪Q7','悍马H2','兰德酷路泽(进口)','兰德酷路泽','雷克萨斯LX','众泰2008','众泰5008','宝马X3','讴歌RDX','欧宝Adam','现代ix35(海外)','众泰T600','沃尔沃XC60','沃尔沃XC60(进口)','全新胜达','全新胜达(进口)','讴歌ZDX','讴歌MDX','陆风X8','陆风X6','猎豹Q6','猎豹CS6','凯迪拉克SRX','奔驰GLK级(进口)','奔驰GLK级','本田CR-V(海外)','本田CR-V','海马骑士','景逸SUV','陆风X5','大切诺基','比亚迪S6','奔驰M级','奔驰G级','宝马X5','奥迪Q5','奥迪Q5(进口)'];
        $where['name']=$name;
        $emotion_positive=M('sentiment')->where($where)->where('sentiment=1')->count();
        $emotion_neural=M('sentiment')->where($where)->where('sentiment=0')->count();
        $emotion_negative=M('sentiment')->where($where)->where('sentiment=-1')->count();
        $this->assign('emotion_positive',$emotion_positive);
        $this->assign('emotion_negative',$emotion_negative);
        $this->assign('emotion_neural',$emotion_neural);
        $this->assign('comment_name',$comment_name);
        $this->assign('name',$name);
        $username=session('login');
        $this->assign('username',$username);
        $this->display();
    }
    public function conditions() { //给conditions.html中的变量赋值
        // 百度指数排行榜
        $index = M();
        $index_rank = $index->query('SELECT name, MONTH(time) AS month, sum(search) AS total FROM
        car.baidu_index WHERE month(time) = 2 GROUP BY name ORDER BY total DESC limit 10');
        $this->assign('index_rank', $index_rank);
        // 销量排行榜
        $sales = M("sales");
        $sales_rank = $sales->where("time >= '2014/2/1' AND time < '2014/3/1'")->order('sales desc')->
        limit(10)->select();
        $this->assign('sales_rank', $sales_rank);
        //情感排行榜
        $emotion=M('emotion_avg')->order('avg desc')->limit(10)->field('name,avg')->select();
        $this->assign('emotion',$emotion);
        $username=session('login');
        $this->assign('username',$username);
        $this->display();
    }
    public function contact(){
        $username=session('login');
        $this->assign('username',$username);
        $this->display();
    }
 
}