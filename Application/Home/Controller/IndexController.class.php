<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       //读取配置信息
       $model = C('user_name');
       
       //读取数据库
       $Articles = M('Article');
       $articleList = $Articles->order('id desc')->select();
       $len = count($articleList);
       for ($i=0; $i < $len; $i++) { 
         if ($articleList[$i]['time']) {
           $arr = explode(' ', $articleList[$i]['time'], 2);
           $articleList[$i]['time'] = $arr[0];
         }
       }
       $this->assign('list',$articleList);
       $this->assign('menu', 'article');
       $this->assign('nav',$nav);
       $this->display();
    }
    public function about(){
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
      $this->display();
    }
}