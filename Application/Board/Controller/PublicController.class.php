<?php
namespace Board\Controller;
use Think\Controller;
class PublicController extends Controller {
	public function __construct()
    {
        parent::__construct();
    }
    public function login(){
    	if (IS_POST) {
    		$post = I('post.');
    		if (empty($post['name'])) {
    			$this->ajaxReturn(make_rtn('请输入登录名！'));
    		}
    		if (empty ($post ['password'])) {
                $this->ajaxReturn(make_rtn('请输入密码！'));
            }
            $map['name'] = $post['name'];
            $map['password'] = $post['password'];

            $res = M('User')->where($map)->find();
            if ($res) {
            	session('login_status', true);
                session('user_name',$map['name']);
            	$this->ajaxReturn(make_rtn('登录成功！', true, '/board'));
            }else{
            	echo '无此账号';
            	$this->ajaxReturn(make_rtn('无此账号！'));
            }
    	}
    }
    public function logout(){
    	if (IS_GET) {
    		if (is_login()) {
            	session('login_status', Null);
    			$this->ajaxReturn(make_rtn('退出成功！', true, '/board/sign/login'));
            	//header('location':'/board/sign/login');
    		}else{
    			$this->ajaxReturn(make_rtn('操作失败！'));
    		}
    	}
    }
}