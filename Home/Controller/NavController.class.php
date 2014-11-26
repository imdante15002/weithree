<?php
namespace Home\Controller;
use Think\Controller;
class NavController extends CommonController {
    public function juqing(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('VideoView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display('index');
	}
	public function gaoxiao(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('VideoView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display('index');
	} 
	public function pvp(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('VideoView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display('index');
	}
	public function pve(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('VideoView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display('index');
	}
	public function gonghui(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('VideoView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display('index');
	}
	public function zahui(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('VideoView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display('index');
	}
	public function  mv(){
		/**
		 * 获取当前访问url对应的栏目id
		 * @var [type]
		 */
		$url->url=ACTION_NAME;
		$id=M('channel')->field(array('id','name','url','keywords','description'))->where($url)->find();
		$vid->cid=$id['id'];
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('VideoView');
		$count      = $m->where($vid)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,40);// 实例化分页类 传入总记录数和每页显示的记录数(40)
		$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $m->where($vid)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		/**
		 * 统计视频总数和播放次数
		 */
		$this->total=M('video_contents')->where($vid)->count('id');
		$this->totalviews=M('video_contents')->where($vid)->sum('views');
		$this->assign('nav',$id);
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display('index');
	}
	/**
	 * 列表请求筛选ajax数据
	 * @return [type] [description]
	 */
	public function ajax_data(){
		/**
		 * 从ajax传递的值中获取数据，查询出请求目录的id
		 * 获取请求排序方式
		 * @var [type]
		 */
		$ajaxurl->url=I('url');
		$sort=I('s');
		$id=M('channel')->where($ajaxurl)->field(array('id','name','keywords','descrition'))->find();
		$vid->cid=$id['id'];//组合出视频数据库中where查询条件
		/**
		 * 对视频存储数据库操作
		 * 对查询数据分页处理
		 * @var [type]
		 */
		$m          = D('VideoView');
		if ($sort=='1') {
			$list = $m->where($vid)->order('id desc')->limit(40)->select();
		} else if($sort=='2') {
			$list = $m->where($vid)->order('views desc')->limit(40)->select();
		}
		foreach ($list as $key => $v) {
			$l_ui->uid=$v['uid'];
			$list[$key]['username']=M('member')->getField('username');
		}
		$this->assign('list',$list);
		$this->display();
	}
}