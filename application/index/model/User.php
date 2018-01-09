<?php
namespace app\index\model;
use think\Model;
class User extends Model
{

	protected function  getUsernameAttr($username){
		return $username.'123123';
	}


	public function myTest()
	{
		return $this->getData('id');
	}

}