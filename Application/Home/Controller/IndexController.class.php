<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('根据Thinkphp改编的项目！','utf-8');
    }
}