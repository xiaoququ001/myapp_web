<?php
namespace app\admin\controller;
use think\Controller;
class Image extends Base
{
    public function upload(){
    	$data =[
    		'status'=>1,
    		'message'=>'ok',
    		'data'=>'http://dl.bizhi.sogou.com/images/2012/01/19/174522.jpg',

    	];
    	echo json_encode($data);
    }
}