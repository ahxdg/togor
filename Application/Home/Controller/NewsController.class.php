<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
        $this->show('<h1>hello!</h1>','utf-8');
    }
    public function news2(){
    	$this->show('<h1>hello news!</h1>','utf-8');
    }
}