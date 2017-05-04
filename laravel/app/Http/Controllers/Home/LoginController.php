<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\publicuser;

use Gregwar\Captcha\CaptchaBuilder;

use App\Http\Middleware\Logging;

class LoginController extends Controller
{
    //显示登录界面
    public function index(){
    	return view('Home.Login.login');
    }
    //执行登录
    public function dologin(Request $request){
    	//实例化模型
    	$user = new publicuser();
    	//调用模型中验证用户的方法
    	$ob = $user->checkUser($request);
    	 // dd($ob);
    	if($ob){
    		session(['users' => $ob]);
    		return redirect('/home/demo');
    	}else{
    		return back()->with('msg','登录失败：用户名或密码不正确');
    	}
    }

    //退出登录
    public function over()
    {
    	//清空session值
    	session()->forget('users');
    	return redirect('/home/logins');
    }

}
