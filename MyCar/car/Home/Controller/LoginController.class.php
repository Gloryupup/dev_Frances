<?php
namespace Home\Controller;
 use Think\Controller;

 /**
  * Class LoginController
  * @package Home\Controller
  */
 class LoginController extends Controller {
    //登录
     public function login(){
      $page=$_REQUEST['page'];
      $isdownload=$_REQUEST['isdownload'];
      if (!session('login')) {
        $this->redirect("User/index",array('page'=>$page));
      }else{
        if($page=="index"){
          $this->success('您已经登录了！', U('Index/index'));
        }else if($page=="conditions"){
          $this->success('您已经登录了！', U('Index/conditions'));
        }else if($page=="product"){
          $this->success('您已经登录了！', U('Index/product'));
        }else if($page=="contact"){
          $this->success('您已经登录了！', U('Index/contact'));
        }
      }
    } 
     //退出
     public function logout(){
      $page=$_REQUEST['page'];
      if (session('login')){//已经登录
        if($page=="index"){
           $this->success('注销成功',U('Index/index'));
        }else if($page=="conditions"){
          $this->success('注销成功',U('Index/conditions'));
        }else if($page=="product"){
          $this->success('注销成功',U('Index/product'));
        }else if($page=="contact"){
          $this->success('注销成功',U('Index/contact'));
        }
        //清除session里面login
        unset ($_SESSION['login']);
      }else{
        if($page=="index"){
          $this->success('您还没有登录！', U('Index/index'));
        }else if($page=="conditions"){
          $this->success('您还没有登录！', U('Index/conditions'));
        }else if($page=="product"){
          $this->success('您还没有登录!', U('Index/product'));
        }else if($page=="contact"){
          $this->success('您还没有登录!', U('Index/contact'));
        }
      }
     }
     //判断是否登录
     public function isLogin(){
      $download=$_REQUEST['Download'];
      if (!session('login')) {
        $this->success('未登录,请先登录', U('Login/login'));
     }else{
        if($download=="index")
          $this->redirect("Download/index");
        else
          $this->redirect("Download/saleDownload");
     }
   }
}
?>