<?php
namespace Home\Controller;
use Think\Controller;
class VideoController extends CommonController {
    public function index(){
    	$D=D('VideoinfoView');
    	$id->id=I('id');
    	$nid['id']=array('neq',I('id'));
    	$views=$D->where($id)->find();
    	$this->assign('views',$views);
    	$this->newlist=$D->where($nid)->order('id desc')->limit(5)->select();
    	M('video_contents')->where($id)->setInc('views',1);//访问+1
    	$this->display();
    }
}