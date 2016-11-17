<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       //读取配置信息
       $model = C('user_name');
       
       //读取数据库
       $Articles = M('Article');
       $articleList = $Articles->order('id desc')->where('recommend=1')->select();
       $len = count($articleList);
       for ($i=0; $i < $len; $i++) { 
         if ($articleList[$i]['time']) {
           $arr = explode(' ', $articleList[$i]['time'], 2);
           $articleList[$i]['time'] = $arr[0];
         }
       }
       $this->assign('list',$articleList);
       $this->assign('menu', 'index');
       $this->assign('nav',$nav);
       $this->display();
    }
    public function notes(){

       //读取数据库
       $Articles = M('Article');
       $articleList = $Articles->order('id desc')->where('big_class=1')->select();
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
    public function share(){

       //读取数据库
       $Articles = M('Article');
       $articleList = $Articles->order('id desc')->where('big_class=2')->select();
       $len = count($articleList);
       for ($i=0; $i < $len; $i++) { 
         if ($articleList[$i]['time']) {
           $arr = explode(' ', $articleList[$i]['time'], 2);
           $articleList[$i]['time'] = $arr[0];
         }
       }
       $this->assign('list',$articleList);
       $this->assign('nav',$nav);
      $this->assign('menu', 'share');
      $this->display();
    }
    public function about(){
      $this->assign('menu', 'about');
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
        $res = $Article->where($data)->select();
        if (count($res) == 0) {
            $this->assign('err','true');
            $this->assign('info','该文章被火星人吃掉了...');
        }else{
            $info = $res[0];
            $arr = explode(' ', $info['time'], 2);
            $info['time'] = $arr[0];
            $this->assign('info',$info);
        }
      $this->assign('menu', 'notes');
      $this->display();
    }

    public function shareDetail(){

      $id = $_GET['id'];
        if (empty($id)) {
            $this->assign('err','true');
            $this->assign('info','该文章被火星人吃掉了...');
        }
        $Article = M('Article');
        $data['id'] = $id;
        $res = $Article->where($data)->select();
        if (count($res) == 0) {
            $this->assign('err','true');
            $this->assign('info','该文章被火星人吃掉了...');
        }else{
            $info = $res[0];
            $arr = explode(' ', $info['time'], 2);
            $info['time'] = $arr[0];
            $this->assign('info',$info);
        }
      $this->assign('menu', 'share');
      $this->display();
    }
}