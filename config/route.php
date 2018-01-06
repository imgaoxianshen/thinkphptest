<?php
think\Route::rule('demo1/:name/[:lesson]','edu/test/demo1','GET',['ext'=>'shtml'],['name'=>'\w{3,8}','lesson'=>'\w{1,10}']);
// return [
// 	'demo1/:lesson'=>['edu/test/demo1',['method'=>'get','ext'=>'shtml'],['lesson'=>'\w{1,10}']],
// 	'test'=>'edu/test/test',
// ];
