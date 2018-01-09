<?php
namespace app\index\controller;

// use think\Controller;
use app\index\controller\Base;
class Indexs  extends Base
{
	protected $lesson;

	public function _initialize($lesson='thinkphp5')
	{
		$this->lesson=$lesson;
	}

	public function demo1(){
		$this->_initialize("hello");
		return $this->lesson;
	}
	public function demo2(){
		return $this->lesson;	
	}

	public function demo3(){
		return $this->siteName;
	}

	public function demo4(){
		return $this->test();
	}
}