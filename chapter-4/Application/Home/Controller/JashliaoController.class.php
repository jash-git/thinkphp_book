<?php

namespace Home\Controller;

use Think\Controller;

header("Content-Type:text/html; charset=utf-8");//PHP 亂碼 

class JashliaoController extends Controller
{
	public function jashliao()
	{
		echo '您访问了home/jashliao/jashliao';
	}
}