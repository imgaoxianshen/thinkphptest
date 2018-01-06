<?php

namespace app\user\controller;
use think\Controller;
use think\Config;
class ManagerUser extends Controller
{
	public function index()
	{
		dump(Config::get());
		return "";
	}

	public function add($n=0,$m=0)
	{
		return '$n+$m = '.($n+$m);
	}
}