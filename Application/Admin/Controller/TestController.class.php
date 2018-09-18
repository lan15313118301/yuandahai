<?php 
namespace Admin\Controller;
use Think\Controller;

class TestController extends Controller{
	public function test(){
		$user = md5(admin);
		$pass = md5(123456);
		dump($user);
		dump($pass);
	}
 }

 ?>
