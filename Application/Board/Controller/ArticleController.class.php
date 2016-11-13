<?php
namespace Board\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function index(){
    	$Articles = M('Article');
    	$articleList = $Articles->select();
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
    		$data['info'] = $post['info'];
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
}