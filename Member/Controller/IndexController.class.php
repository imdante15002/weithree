<?php
namespace Member\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	  if (!$_SESSION['uid']) {
            $this->error('请先登录','/');
        }
        $field      = array('id','title','lipic','views');
        $m          = M('video_contents');
        $count      = $m->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,28);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list       = $m->field($field)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this       ->assign('list',$list);
        $this->assign('page',$show);
        $this->videotop=M('video_contents')->field($field)->limit(6)->order('views desc')->select();
    	$this->display();
    }
}