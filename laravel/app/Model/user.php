<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //指定一个表
    protected $table = 'admin';
    public $timestamps = false;
    public function checkUser($request)
    {
    	// dd($request);
    	// 获取用户登录的用户名
    	$name = $request->input('name');
    	// dd($name);
    	//通过用户名查询数据库中有没有这个用户
    	$ob = $this->where('name',$name)->first();
    	//如果查出，在茶密码
    	if($ob){
            //         input 中的参数根据$request中的参数来写
    		if($request->input('password')==$ob->pwd){
    			return $ob;
    		}else{
    			return null;
    		}
    	}else{
    		return null;
    	}
    }
}
