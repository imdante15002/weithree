<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends CommonController{
    public function index(){
        $this->display();
    }
    public function upsite(){//更新站点设置
        $site=I('post.');
        if(M('config')->save($site)){
            $this->success('保存成功！');
        }else{
            $this->error('保存失败了！');
        }
    }
    public function upload(){
        $this->ec=M('extend_config')->where('id = 1')->find();
        $this->display();
    }
    public function save_upload(){
        $data=I('post.');
        if (M('extend_config')->save($data)) {
            $this->success('保存成功！');
        }else{
            $this->error('后台君也不不知道哪里错了！');
        }
    }
    public function console(){
        $this->display();
    }
    public function app_key(){
        $this->conf=M('config')->find(1);
        $this->display();
    }
    public function up_appkey(){
        $data=I('post.');
        if (M('config')->save($data)) {
            $this->success('保存成功！');
        }else{
            $this->error('后台君也不不知道哪里错了！');
        }
    }
    public function extend(){
        $this->display();
    }
    public function seo(){
        $this->display();
    }
}