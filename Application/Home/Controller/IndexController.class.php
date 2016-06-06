<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('一元购项目','utf-8');
    }
    public function login(){
    	$this->show('测试项目','utf-8');
    }
}