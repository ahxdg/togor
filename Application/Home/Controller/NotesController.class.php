<?php
namespace Home\Controller;
use Think\Controller;
class NotesController extends Controller {
    public function index(){

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
}