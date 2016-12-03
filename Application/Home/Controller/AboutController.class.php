<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function index(){
      $this->assign('menu', 'about');
      $this->display();
    }
}