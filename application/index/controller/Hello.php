<?php
namespace app\index\controller;

class Hello
{
	use \traits\controller\Jump;
	public function index()
	{
		return "hello\index";
	}
	public function demo($name)
	{
		if($name=='php'){
			$this->success("跳转",'https://www.baidu.com');
		}
	}
}