<?php
/**
 * TestController.class.php
 */

namespace Home\Controller;

use Think\Controller;

header("Content-Type:text/html; charset=utf-8");//PHP 亂碼 

class TestController extends Controller
{
	public function testAction()//public function test()//
	{
		echo '您访问了home/test/test';
	}

	public function listAction()//public function list()//
	{
		echo '您访问了home/test/list';
	}
}