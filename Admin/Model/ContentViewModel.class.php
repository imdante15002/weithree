<?php
namespace Admin\Model;
use Think\Model\ViewModel;
/**
 * 单页面视图模型
 */
class ContentViewModel extends ViewModel{
    public $viewFields = array(
        'article'=>array('tid','catid','title','dateline','views','_type'=>'LEFT'),
        'channel'=>array('name','_on'=>'article.catid=channel.id'),
        'member'=>array('username','_on'=>'article.uid=member.uid')
        );
}