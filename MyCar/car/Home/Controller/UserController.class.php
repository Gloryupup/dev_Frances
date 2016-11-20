<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	//登录
	public function index(){
		if(session('username')!=null){
			$this->redirect('User/userList');
		} else {
			$this->display();
		}
	}
	//login界面
	public function login(){
		if(session('username')!=null) {
			$this->redirect('User/userList');
		} else {
			$User=M('User');
			$dataPost=$User->create();
			$dataSearch=$User->where(array('username'=>$dataPost['username']))->find();
			if($dataSearch){
				if($dataSearch['password']==md5($dataPost['password'])) {
					if($dataSearch['username']=='root') {//管理员权限
						session('username',$dataPost['username']);
						$this->redirect('User/userList');
					} else {//普通用户权限
						session('login',$dataPost['username']);
						$this->redirect('index/index');
					}
				} else {
					$this->error('密码错误！');
				}
			}else {
				$this->error('用户不存在！');
			}
	    	$this->display();
	    }
	}
	//登录结果界面
	public function logup_result() {
		$data = I("post.");
		$data["password"] = md5($data["password"]);
		$User = M('User');
		$dataSearch = $User->where(array('username'=>$data['username']))->find();
		if($dataSearch) {
			$this->error('该用户名已被使用！', U('logup'));
		} else {
			$res = $User->add($data);
			if($res) {
				$this->success("您已成功注册！",U('index'));
			} else {
				$this->error("注册失败！",U('logup'));
			}
		}
	}
	public function userList(){
		if(session('username')==null) {
			$this->redirect('User/index');
		} else {
			$date = date('Y年m月d日');
			$hour = (int)date('H');
			if($hour < 2) {
				$time = '晚上';
			} elseif($hour < 9) {
				$time = '早上';
			} elseif($hour < 11) {
				$time = '上午';
			} elseif($hour < 13) {
				$time = '中午';
			} elseif($hour < 18) {
				$time = '下午';
			} else {
				$time = '晚上';
			}
			$User=M('user');
			$userList=$User->select();
			$this->assign('time',$time);
			$this->assign('date',$date);
			$this->assign('list',$userList);
			$this->display();
		}
	}
	public function userPreEdit($userid){
		if(session('username')==null) {
			$this->redirect('User/index');
		} else {
			$User=M('User');
			$data=$User->where(array('userid'=>$userid))->find();
			if(!$data) {
				$this->error('出错了！');
			} else {
				$this->assign('user',$data);
				$this->display();
			}
		}
	}
	public function userEdit($userid) {
		if(session('username')==null) {
			$this->redirect('User/index');
		} else {
			$User=M('User');
			$user=$User->create();
			$user['password']=md5($user['password']);
			$user['userid']=$userid;
			$orgin=$User->where(array('userid'=>$userid))->find();
			$data=$User->where(array('username'=>$user['username']))->find();
			if($user['username']==''){
				$this->error('修改失败（用户名不能为空）',U('User/userList'));
			} else {
				if( strcmp($user['username'],$orgin['username'])!=0 && ($data!=null) ) {
					$this->error('修改失败！（该用户已存在）',U('User/userList'));
				}  else {
					if( $User->save($user) ) {
						$this->success('修改成功！',U('User/userList'));
					} else {
						$this->error('修改失败！',U('User/userList'));
					}	
				}
			}
		}
	}
	public function userDelete($userid) {
		if(session('username')==null) {
			$this->redirect('User/index');
		} else {
			$User=M('User');
			if($User->where(array('userid'=>$userid))->delete()) {
				$this->success('删除成功！',U('User/userList'));
			} else {
				$this->error('删除失败！',U('User/userList'));
			}
		}
	}
	public function userPreAdd() {
		if(session('username')==null) {
			$this->redirect('User/index');
		} else {
			$this->display();
		}
	}
	public function userAdd() {
		if(session('username')==null) {
			$this->redirect('User/index');
		} else {
			$User=M('User');
			$user=$User->create();
			$user['password'] = md5($user['password']);
			$data=$User->where(array('username'=>$user['username']))->find();
			if($user['username']==''){
				$this->error('新增失败（用户名不能为空）',U('User/userList'));
			} else {
				if($data!=null) {
					$this->error('新增失败（该用户已存在）',U('User/userList'));
				} else {
					if($User->add($user)) {
						$this->success('新增成功！',U('User/userList'));
					} else {
						$this->error('新增失败！',U('User/userList'));
					}
				}
			}
		}
	}
	public function quit(){
		session(null);
		$this->redirect("Index/index");
	}
	
}
?>