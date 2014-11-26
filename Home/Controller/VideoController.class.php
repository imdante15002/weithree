<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends CommonController {
    public function index(){
    	$D=D('VideoinfoView');
    	$id->id=I('id');
    	$views=$D->where($di)->find();
    	$this->assign('views',$views);
    	$this->display();
    }
}