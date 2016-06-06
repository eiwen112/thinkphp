<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends Controller {
    public function index(){
    	$Mlist = M('goods');
    	$list = $Mlist->select();
    	$data = array(
    			'code' => '1',
    			'data' => $list,	
    	);
    	echo json_encode($data);
    }
    public function buy(){
    	$goods = M('goods');
    	$buy_log = M('buy_log');
    	$userid = session(session_id().'userId')?session(session_id().'userId'):1;
    	$amount = I('amount');
    	$share  = I('share');
    	$goodsid = I('goodsid');
    	$date = date('Y-m-d H:i:s');
    	if ($amount < '1' || $share < '1' || $goodsid < '1') {
    		echo json_encode(array('code'=>'0','msg'=>'error!参数错误！'));
    		return false;
    	}
    	$g = $goods->find(array(id=>'1'));
    	$data = array(
    			'y_amount' => $g['y_amount'] + $amount,
    			'share'    => $g['share'] + $share,
    			'update'   => date('Y-m-d H:i:s'),
    	);
    	$buydata = array(
    			'u_id' => $userid,
    			'g_id' => $goodsid,
    			'share' => $share,
    			'amount' => $amount,
    			'time'  => $date,
    	);
    	$buy_log->add($buydata);
    	$res = $goods->where(array(id=>'1'))->data($data)->save();
    	if ($res) {
    		$msg = array(
    				'code' => '1',
    				'msg'  => 'succ',
    		);
    	}else{
    		$msg = array(
    				'code' => '0',
    				'msg'  => 'error',
    		);
    	}
    	echo json_encode($msg);
    	die();
    }
    public function goods(){
    	$goods = M('goods');
    	$id = I('id');
    	$info = $goods->where(array('id'=>$id))->find();
    	echo json_encode($info);
    }
}