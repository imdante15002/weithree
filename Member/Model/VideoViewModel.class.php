<?php
namespace Home\Model;
use Think\Model\ViewModel;
class VideoViewModel extends ViewModel {
    public $viewFields = array(
        'video_contents'=>array('id','uid','cid','title','lipic','views','dateline','_type'=>'LEFT'),
        'member'=>array('username','avtimg','_on'=>'video_contents.uid=member.uid'),
        'channel'=>array('name','url','_on'=>'video_contents.cid=channel.id')
        );
}