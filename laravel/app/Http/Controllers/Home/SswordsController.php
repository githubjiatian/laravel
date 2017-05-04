<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class SswordsController extends Controller
{
    //
    public function index(Request $request)
    {
    	// dd($request->input('keywords'));
    	// if($request->input('keywords')!=="请输入搜索关键词"){
    	// $ob=DB::table('goods')->where('id',$id)->get();
    	// // dd($ob);
    	// return view('Home.Goods.index',['ob'=>$ob]);
    	// };

    	// dd('huiqu');
    	//实例化操作表
        // $ob=DB::table('goods');
        //判断是否有搜索条件
        if($request->input('keywords')=="请输入搜索关键词"){
        	return back();
		};
		if(!$request->has('keywords')){
			return back();
		};
        if($request->has('keywords')){
            //获取搜索条件
            $name=$request->input('keywords');
           
            //给查询添加where条件
            $ob=DB::table('goods')->where('name','like',"%{$name}%")->get();
            // dd($ob);
            return view('Home.Sswordes.index',['ob'=>$ob,'ss'=>$name]);

        }
    }
    
}
