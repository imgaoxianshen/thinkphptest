<?php
namespace app\index\controller;
use think\Controller;
class Login extends Controller
{
	public function index()
	{

	}

	public function ok()
	{
		return "登陆成功---ok";
	}

	public function login()
	{
		return "重新登陆---login";
	}
}