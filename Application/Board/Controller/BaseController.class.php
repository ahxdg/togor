<?php
namespace Board\Controller;
use Think\Controller;
class BaseController extends Controller {
    
    public function _initialize(){
    	if(is_login()){
    		
    	}else{
    		redirect(__ROOT__.'/board/sign/login');
    	}
    }
}