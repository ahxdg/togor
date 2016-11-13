<?php
namespace Board\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function index(){
    	$this->assign('menu', 'article');
        $this->display();
    }

}