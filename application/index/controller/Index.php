<?php
namespace app\index\controller;

use think\Controller;
use think\Config;

class Index extends Controller
{
    public function index()
    {
    
    	// Config::load(APP_PATH.'../config/new_conf/config.php');
    	// Config::parse(APP_PATH.'../config/new_conf/conf.ini','ini');
 		// dump(Config::get('app_debug'));
 		// dump(config('trace.type'));
 		// dump(config('?trace'));
 		// dump(Config::has('trace'));
 		// $conf = 'app_debug1';
 		// $is_exit = Config::has($conf);
 		// if($is_exit){
 		// 	dump(Config::get($conf));
 		// }else{
 		// 	return $conf.'配置项不存在';
 		// }
    	// Config::set('site_domain','www.vaidas.com');

    	$config = [
    		'asd'=>'asd',
    		'qwe'=>'qwe',
    		'zxc'=>'zxc',
    	];
    	// Config::set($config);
    	// Config::set('site',$config);
    	// dump(Config::get());
    	Config::set($config,'user');
    	dump(Config::get());
    }

    
 
}
