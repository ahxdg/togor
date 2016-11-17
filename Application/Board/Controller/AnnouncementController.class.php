<?php
namespace Board\Controller;
use Think\Controller;
class AnnouncementController extends BaseController {
    public function index(){
    	$this->assign('menu', 'announcement');
        $this->display();
    }

}