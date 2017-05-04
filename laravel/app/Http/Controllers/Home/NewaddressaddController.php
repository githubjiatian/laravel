<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class NewaddressaddController extends Controller
{
    //
    public function index(Request $request)
    {
    	$data=array();
    	//查省名
    	$list1 = DB::table('district')->where('id',$request->input('sheng'))->get();
    	// dd($list);
    	foreach ($list1 as $key => $value) {
    		foreach ($value as $k => $v) {
    			if($k=='name'){
    				$sheng=$v;
    			}
    		}
    	}
    	//查市名
    	$list2 = DB::table('district')->where('id',$request->input('shi'))->get();
    	// dd($list);
    	foreach ($list2 as $key => $value) {
    		foreach ($value as $k => $v) {
    			if($k=='name'){
    				$shi=$v;
    			}
    		}
    	}
    	//查县名
    	$list3 = DB::table('district')->where('id',$request->input('xian'))->get();
    	// dd($list);
    	foreach ($list3 as $key => $value) {
    		foreach ($value as $k => $v) {
    			if($k=='name'){
    				$xian=$v;
    			}
    		}
    	}
    	//查村名
    	if ($request->has('cun')) {
    		$list4 = DB::table('district')->where('id',$request->input('cun'))->get();
	    	// dd($list);
	    	foreach ($list4 as $key => $value) {
	    		foreach ($value as $k => $v) {
	    			if($k=='name'){
	    				$cun=$v;
	    			}
	    		}
	    	}
    	}
    	// dd("$sheng $shi $xian");
    	$data['uid']=session('users.id');
    	$data['name']=$request->input('name');
    	if ($request->has('cun')) { $data['adder']=("$sheng $shi $xian $cun"); };
    	if (!$request->has('cun')) { $data['adder']=("$sheng $shi $xian"); };
    	$data['detailed']=$request->input('detailed');
    	$data['cellphone']=$request->input('cellphone');
    	// dd($data);
    	$dizhi=DB::table('address')->insertGetId($data);
    	$data['id']=$dizhi;
    	// dd($data);
    	echo json_encode($data);

    }
}
