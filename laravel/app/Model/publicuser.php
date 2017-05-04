<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class publicuser extends Model
{
	//1.指定一个表
    protected $table = 'user';
    //2.如果主键不是id则指定一个主键
    //protected $primarykey = "..."

    //自动生成的表中有创建时间和修改时间，如果不想维护这两个字段使用下面的属性进行设置
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
    		if($request->input('pwd')==$ob->pwd){
    			return $ob;
    		}else{
    			return null;
    		}
    	}else{
    		return null;
    	}
    }
}
