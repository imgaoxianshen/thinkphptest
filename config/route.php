<?php
// think\Route::rule('demo1/:name/[:lesson]','edu/test/demo1','GET',['ext'=>'shtml'],['name'=>'\w{3,8}','lesson'=>'\w{1,10}']);
// return [
// 	'demo1/:lesson'=>['edu/test/demo1',['method'=>'get','ext'=>'shtml'],['lesson'=>'\w{1,10}']],
// 	'test'=>'edu/test/test',
// ];



//路由分组

// return [
// 	'[demo]'=>[
// 		':id' =>['index/user/demo1',['method'=>'get'],['id'=>'\d{2,4}']],
// 		':name' =>['index/user/demo2',['method'=>'get'],['name'=>'[a-zA-z]+']],
// 		':isOk' =>['index/user/demo3',['method'=>'get'],['isOk'=>'0|1']],
// 	]
// ];

// think\Route::group('demo',[
// 		':id' =>['index/user/demo1',['method'=>'get'],['id'=>'\d{2,4}']],
// 		':name' =>['index/user/demo2',['method'=>'get'],['name'=>'[a-zA-z]+']],
// 		':isOk' =>['index/user/demo3',['method'=>'get'],['isOk'=>'0|1']],
// ]);

//用闭包
// think\Route::group('demo',function(){
// 	think\Route::get(':id','index/user/demo1',[],['id'=>'\d{2,4}']);
// 	think\Route::get(':name','index/user/demo2',[],['name'=>'[a-zA-z]+']);
// 	think\Route::get(':isOk','index/user/demo3',[],['name'=>'[0|1]']);
// });
