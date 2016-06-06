<?php
namespace Think;
use Think\Controller;
/**
 * 项目内部访问控制类调用本类都要登录或者认证
 * @author Eiwen
 *
 */
class BaseController extends Controller{
	public $userInfo = null;
	
	public function _initialize() {
		
	}
}