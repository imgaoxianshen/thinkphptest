<?php
namespace app\edu\controller;
use think\Controller;
class Test  extends Controller
{
	public function demo1($name,$lesson='php')
	{
		return $name."my demo1".$lesson;
	}
	public function test()
	{
		return "test";
	}
}