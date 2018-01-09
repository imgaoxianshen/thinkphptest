<?php
namespace app\index\controller;
use think\Controller;
class Base extends  Controller
{
	protected $siteName="shuaibi";

	protected function test()
	{
		return "欢迎".$this->siteName."啊实打实的";
	}
}