<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$m          = D('VideoView');
    	$count      = $m->count();// 查询满足要求的总记录数
		$list       = $m->order('id desc')->limit(45)->select();
		$this       ->assign('list',$list);
		/**
		 * 统计视频总数和播放次数
		 */
		$this       ->total=$count;
		$this       ->totalviews=$m->sum('views');
		/**
		 * 玩家动态
		 */
		$this       ->new_dt=$m->limit(6)->order('id desc')->select();
		/**
		 * 幻灯片
		 */
		$this->slides=M('slides')->field('id,title,url,pic')->order('sort')->limit(4)->select();
		/**
		 * 输出模板
		 */
     	$this       ->display();   
    }
}