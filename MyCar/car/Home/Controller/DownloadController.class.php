<?php
namespace Home\Controller;
use Think\Controller;
class DownloadController extends Controller {
    public function index(){
        $file_dir = "D:/wamp/www/MyCar/dataDowload/";
		$name = 'baiduIndex.csv';
		$filename = $file_dir.$name;
 		if (!empty($name)){
 		$download=new\Org\Net\Http();
 		$download->download($filename,$name);
     	}
	}
	public function saleDownload(){
		$file_dir = "D:/wamp/www/MyCar/dataDowload/";
		$name = 'sales.csv';
		$filename = $file_dir.$name;
 		if (!empty($name)){
 		$download=new\Org\Net\Http();
 		$download->download($filename,$name);
     	}
	}
}