<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Config;

class Hi extends Base 
{
	//前置操作属性
	protected $beforeActionList=[
		'before1'=>'',//为空表示当前类所有操作的前置操作
		'before2'=>['only'=>'demo2'],
		'before3'=>['except'=>'demo1,demo2'],//排除
	];

	protected  $siteName;//自定义属性
	protected function before1()
	{
		$this->siteName=$this->request->param('name');
	}

	protected function before2()
	{
		$this->siteName="nihaoa";
	}

	protected function before3()
	{
		$this->siteName="before3";
	}

	public function demo1()
	{		
		return $this->siteName;
	}
	public function demo2()
	{		
		return $this->siteName;
	}
	public function demo3()
	{		
		return $this->siteName;
	}

	public function demo4()
	{
		dump(Config::get());
	}
}