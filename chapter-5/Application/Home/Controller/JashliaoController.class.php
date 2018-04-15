<?php

namespace Home\Controller;

use Think\Controller;//C的函示庫
use Think\Model;//M 函示庫

header("Content-Type:text/html; charset=utf-8");//PHP 亂碼 

class JashliaoController extends Controller
{
	public function jashliao()
	{
		echo '您访问了home/jashliao/jashliao';
	}
	public function showuserdata()
	{
		$m = new Model();
		$data = $m->query('SELECT * FROM c5_user');
		print_r($data);
	}	
}
?>