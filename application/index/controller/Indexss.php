<?php
namespace app\index\controller;
// use think\Controller;
use think\Request;
class Indexss 
{
	protected $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function demo1()
	{	
		// return $lesson;
		// return $this->request->param('lesson');
		// return Request::instance()->param('lesson');
		// return $request->param('lesson');
		// return $this->$request->param('lesson');
		return $this->request->param('lesson');
	}

	public function demo2()
	{	
		// return $this->request->param('lesson');
		// return Request::instance()->param('lesson');
		// return $request->param('lesson');
		return $this->request->param('lesson');
	}
}