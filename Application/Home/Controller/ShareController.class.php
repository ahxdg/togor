<?php
namespace Home\Controller;
use Think\Controller;
class ShareController extends Controller {
    public function index(){
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
    public function shareDetail(){

      $id = $_GET['id'];
        if (empty($id)) {
            $this->assign('err','true');
            $this->assign('info','该文章被火星人吃掉了...');
        }
        $Article = M('Article');
        $data['id'] = $id;
        $res = $Article->where($data)->select();
        $last = $Article->where('big_class=2 and id<'.$id)->order('id desc')->find();
        $next = $Article->where('big_class=2 and id>'.$id)->find();
        if (count($res) == 0) {
            $this->assign('err','true');
            $this->assign('info','该文章被火星人吃掉了...');
        }else{
            $info = $res[0];
            $arr = explode(' ', $info['time'], 2);
            $info['time'] = $arr[0];
            $this->assign('info',$info);
        }

      $this->assign('last', $last);
      $this->assign('next', $next);
      $this->assign('menu', 'share');
      $this->display();
    }
}