<?php
namespace Board\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function index(){
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
        $this->display();
    }
    public function add(){
    	if (IS_POST) {
    		$post = I('post.');
    		if (empty($post['title'])) {
    			$this->ajaxReturn(make_rtn('请输入文章标题！'));
    		}
    		if (empty($post['info'])) {
    			$this->ajaxReturn(make_rtn('请输入文章内容！'));
    		}
    		$Article = M('Article');
            $data['title'] = $post['title'];
    		$data['profiles'] = $post['profiles'];
            $data['info'] = $post['info'];
    		$data['little_class'] = $post['little_class'];
    		$data['time'] = date('Y-m-d');
    		$Article->add($data);
    		$this->ajaxReturn(make_rtn('提交成功！',true));
    	}
    	$this->display();
    }
    public function delete(){
    	$id = $_GET['id'];
    	if (empty($id)) {
    		$this->ajaxReturn(make_rtn('操作失败！'));
    	}
    	$Article = M('Article');
    	$res = $Article->delete($id);
    	if ($res) {
    		$this->ajaxReturn(make_rtn('操作成功！', true));
    	}else{
    		$this->ajaxReturn(make_rtn('操作失败！'));
    	}
    }
    public function info(){
        $id = $_GET['id'];
        if (empty($id)) {
            $this->assign('err','true');
            $this->assign('info','该文章被火星人吃掉了...');
        }
        $Article = M('Article');
        $data['id'] = $id;
        $res = $Article->where($data)->select();
        if ($res) {
            $info = $res[0];
            $arr = explode(' ', $info['time'], 2);
            $info['time'] = $arr[0];
            $this->assign('info',$info);
        }else{
            $this->assign('err','true');
            $this->assign('info','该文章被火星人吃掉了...');
        }
        $this->display();
    }
    public function updata(){
        if (IS_POST) {
            $post = I('post.');
            if (empty($post['title'])) {
                $this->ajaxReturn(make_rtn('请输入文章标题！'));
            }
            if (empty($post['info'])) {
                $this->ajaxReturn(make_rtn('请输入文章内容！'));
            }
            $Article = M('Article');
            $data['title'] = $post['title'];
            $data['profiles'] = $post['profiles'];
            $data['info'] = $post['info'];
            $data['little_class'] = $post['little_class'];
            $data['time'] = date('Y-m-d');
            $arr['id'] = $post['id'];
            $res = $Article->where($arr)->save($data);
            if ($res) {
                $this->ajaxReturn(make_rtn('修改成功！',true));
            }else{
                $this->ajaxReturn(make_rtn('修改失败！'));
            }
            
        }
    }
}