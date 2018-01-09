<?php
namespace app\index\controller;

use think\Controller;
use think\Config;
use think\Request;
use think\Db;
use app\index\model\User;
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

    	// $config = [
    	// 	'asd'=>'asd',
    	// 	'qwe'=>'qwe',
    	// 	'zxc'=>'zxc',
    	// ];
    	// Config::set($config);
    	// Config::set('site',$config);
    	// dump(Config::get());
    	// Config::set($config,'user');
    	// dump(Config::get());

    }
    public  function demo(){
        return "index/index/demo";
    }
    

    public function _empty($method){
        return "方法".$method."不存在";
    }

    public function hell($name)
    {
        if($name=='php'){
            // $this->success('正在跳转','login/ok');
            $this->redirect("ok",['siteName'=>'heioasdhasshuaibi']);
        }else{
            // $this->error('返回登陆','login/login');
            $this->redirect("http://www.baidu.com",302);
        }
    }

    public function ok($siteName)
    {
        return "后台".$siteName;
    }
    
    public function login()
    {
        return "重新登陆i";

    }


    public function hello($name,$lesson)
    {
        return 'hello'.$name.'-====='.$lesson;
    }


    public function  hello1($id='',$name='',$age=18)
    {
        $request = Request::instance();
        // dump($request->get());
        // dump($request->post());
        // dump($request->param('name'));
        // dump($request->has('nam'));
        // dump($request->url(true));
        // dump($request->pathinfo());
        // dump($request->module());
        // dump($request->ip());
        // dump($request->only('id'));
    }


    public function demo1()
    {
        return $this->request->siteName;
    }


    public function demo2()
    {
        return $this->request->getSiteName();
    }

    public function demo3()
    {
    //     $link = Db::connect('mysql://root:@localhost:3306/yunrui_shop#utf8');//   mysql://root:@localhost:3306/yunruishop#utf8
    //     $result = $link->table('yrshop_user')->select();
    //     dump($result);

        $result=Db::table('yrshop_user')->select();
        dump($result);
    }

    public function demo4()
    {
        // $sql = "SELECT * FROM `yrshop_user` where id>?";
        $sql = "SELECT * FROM `yrshop_user` where id>:id";
        $res = Db::query($sql,['id'=>2000]);
        dump($res);

    }

    public function demo5()
    {
        // dump(
        // Db::table("yrshop_user")->field('id,username,nickname')->where('id','>','123')->select()
        // );
        // $id = 2000;
        // dump(
        // Db::table("yrshop_user")
        // ->field('id,username,nickname')
        // ->where(function($query) use ($id){
        //     $query->where('id','>',$id);
        // })
        // ->select()
        // );

        // dump(
        //     Db::select(function($query) use ($id){
        //         $query->table("yrshop_user")
        //         ->field(['id'=>'asd'])
        //         ->where(['id'=>['>',$id]]);
        //     })
        // );

        // dump(Db::table('yrshop_user')->where('id',1001)->value("username"));
        dump(Db::table('yrshop_user')->where('id','>',1001)->column("username",'id'));
    }

    public function demo6()
    {
        // $user = new User();
        // $res= $user->where('id','1004')->find();
        // dump($res->getData());

        dump(User::get(1004)->myTest());
    }

    public function demo7()
    {
        // $user = new User();
        $data = ['id'=>1333,'name'=>'shuaibi'];
        // //-----说明是更新操作----------
        // $user->isUpdate(true)->save($data);
        // //--or
        // $user->save($data,['id'=>1333]);
        //------更行------- 
        $where = ['id'=>1212];
        $field = ['name','age'];
        $res = User::update($data,$where,$field);

    }

    public function demo8()
    {
        // $user = new User();
        // $where = function($query){
        //     $query->field(['username','id'])
        //     ->where('id','>','1002');
        // };

        //---find和get都找到一条记录        
        // $res= $user->get($where);
        // $res= $user->find($where);
        //---select和all都找到多条记录        
        // $res = $user->select($where);
        // $res = $user->all($where);
        // dump($res->getData());
        // dump($res);
        // foreach($res as $v){
        //     dump($v->getData());
        // }


        //-----------find 和select 尽量用于DB类的操作
        //-----------尽量用静态调用来查询



        //静态调用
        $where = function ($query){
            $query->field(['username','id'])
            ->where('id',1122);
        };
        dump(User::find($where)->getData());

    }


    public function demo9()
    {
        //--------delect只能删除一条记录------
        //        就是当前的模型记录
        $where = function($query){
            $query->where('id','>','1001');
            // ->where('age','>',40)
            // ->whereOr('')
        };

        User::destroy($where);


    }

    public function demo10(){
        $res = User::get("1200");
        dump($res->getData());
    }

}
