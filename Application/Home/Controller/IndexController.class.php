<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       //读取配置信息
       $model = C('user_name');
       
       //读取数据库
       $User = M('User');
       $info = $User->select();
       $User = M('Section');
       $nav = $User->select();

       $this->assign('user',$model);
       $this->assign('list',$info);
       $this->assign('nav',$nav);
       $this->display();
    }
    public function about(){
      $this->display();
    }
    public function artInfo(){
      $this->display();
    }
}