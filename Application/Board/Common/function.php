<?php

function is_login(){
	$user = session('login_status');
	if ($user) {
		return true;
	}else{
		return false;
	}
}

function make_rtn($info, $status = false, $url = '', $act = ''){
	$rtn = array('status' => $status, 'info' => $info, 'url' => $url, 'act' => $act);
	return $rtn;
}
