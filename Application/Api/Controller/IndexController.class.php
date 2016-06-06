<?php
namespace Api\Controller;
use Think\BaseController;
/**
 * API项目类
 * @author Administrator
 *
 */
class IndexController extends BaseController {
    public function index(){
    	$data = array(
    			'code' => 0,
    			'msg'  => 'API项目',
    	);
        $this->ajaxReturn($data);
    }
}