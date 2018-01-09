<?php
namespace app\index\controller;

use think\Controller;

class User extends Controller
{
	public function demo1($id)
	{
		return 'index/User/demo1--'.$id;
	}

	public function demo2($name)
	{
		return 'index/User/demo2--'.$name;

	}	

	public function demo3($isOk)
	{
		return 'index/User/demo3--'.$isOk;
	}	
}