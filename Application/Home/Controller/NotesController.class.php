<?php
namespace Home\Controller;
use Think\Controller;
class NotesController extends Controller {
    public function index(){
       //读取数据库
       $Articles = M('Article');
       $articleList = $Articles->order('id desc')->where('big_class=1')->limit(8)->select();
       $len = count($articleList);
       for ($i=0; $i < $len; $i++) { 
         if ($articleList[$i]['time']) {
           $arr = explode(' ', $articleList[$i]['time'], 2);
           $articleList[$i]['time'] = $arr[0];
         }
       }
       $this->assign('list',$articleList);
       $this->assign('nav',$nav);
      $this->assign('menu', 'notes');
      $this->display();
    }
    public function artInfo(){

      $id = $_GET['id'];
        if (empty($id)) {
            $this->assign('err','true');
            $this->assign('info','该文章被火星人吃掉了...');
        }
        $Article = M('Article');
        $data['id'] = $id;
        $res = $Article->where($data)->find();
        $last = $Article->where('big_class=1 and id<'.$id)->order('id desc')->find();
        $next = $Article->where('big_class=1 and id>'.$id)->find();
        if (count($res) == 0) {
            $this->assign('err','true');
            $this->assign('info','该文章被火星人吃掉了...');
        }else{
            $info = $res;
            $arr = explode(' ', $info['time'], 2);
            $info['time'] = $arr[0];
            $this->assign('info',$info);
        }
      $this->assign('last', $last);
      $this->assign('next', $next);
      $this->assign('menu', 'notes');
      $this->display();
    }
	public function web(){
		 //读取数据库
       $Articles = M('Article');
	   $articleList = $Articles->order('id desc')->where('little_class = "web" and big_class=1')->select();
       $len = count($articleList);
       for ($i=0; $i < $len; $i++) { 
         if ($articleList[$i]['time']) {
           $arr = explode(' ', $articleList[$i]['time'], 2);
           $articleList[$i]['time'] = $arr[0];
         }
       }
       $this->assign('list',$articleList);
       $this->assign('nav',$nav);
      $this->assign('menu', 'notes');
      $this->display();
	}
	public function sql(){
		 //读取数据库
       $Articles = M('Article');
	   $articleList = $Articles->order('id desc')->where('little_class = "sql" and big_class=1')->select();
       $len = count($articleList);
       for ($i=0; $i < $len; $i++) { 
         if ($articleList[$i]['time']) {
           $arr = explode(' ', $articleList[$i]['time'], 2);
           $articleList[$i]['time'] = $arr[0];
         }
       }
       $this->assign('list',$articleList);
       $this->assign('nav',$nav);
      $this->assign('menu', 'notes');
      $this->display();
	}
	public function other(){
		 //读取数据库
       $Articles = M('Article');
	   $articleList = $Articles->order('id desc')->where('little_class = "other" and big_class=1')->select();
       $len = count($articleList);
       for ($i=0; $i < $len; $i++) { 
         if ($articleList[$i]['time']) {
           $arr = explode(' ', $articleList[$i]['time'], 2);
           $articleList[$i]['time'] = $arr[0];
         }
       }
       $this->assign('list',$articleList);
       $this->assign('nav',$nav);
      $this->assign('menu', 'notes');
      $this->display();
	}
	public function php(){
		 //读取数据库
       $Articles = M('Article');
	   $articleList = $Articles->order('id desc')->where('little_class = "php" and big_class=1')->select();
       $len = count($articleList);
       for ($i=0; $i < $len; $i++) { 
         if ($articleList[$i]['time']) {
           $arr = explode(' ', $articleList[$i]['time'], 2);
           $articleList[$i]['time'] = $arr[0];
         }
       }
       $this->assign('list',$articleList);
       $this->assign('nav',$nav);
      $this->assign('menu', 'notes');
      $this->display();
	}
	public function python(){
		 //读取数据库
       $Articles = M('Article');
	   $articleList = $Articles->order('id desc')->where('little_class = "python" and big_class=1')->select();
       $len = count($articleList);
       for ($i=0; $i < $len; $i++) { 
         if ($articleList[$i]['time']) {
           $arr = explode(' ', $articleList[$i]['time'], 2);
           $articleList[$i]['time'] = $arr[0];
         }
       }
       $this->assign('list',$articleList);
       $this->assign('nav',$nav);
      $this->assign('menu', 'notes');
      $this->display();
	}
  public function loadMore(){
    if (IS_GET) {
      $get = I('get.');
      $offset = (int)$get['offset'];
      $length = (int)$get['length'];
    }
      $Articles = M('Article');
       $list = $Articles->order('id desc')->where('big_class=1')->limit($offset,$length)->select();
       $len = count($list);
       for ($i=0; $i < $len; $i++) { 
         if ($list[$i]['time']) {
           $arr = explode(' ', $list[$i]['time'], 2);
           $list[$i]['time'] = $arr[0];
         }
       }
      $this->ajaxReturn($list);
  }
}