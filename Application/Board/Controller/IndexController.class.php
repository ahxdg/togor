<?php
namespace Board\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
    	$user = session('user_name');
        $this->assign('user',$user);
        $this->display();
    }

    public function test(){
    	$this->display();
    }
}