<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class NewaddressController extends Controller
{
    //
    public function index(Request $request)
    {
    	//城市级联的
    	// dd(666);
    	// dd($request->all());
    	$list = DB::table('district')->where('upid',$request->input('upid'))->get();
    	// dd($list);
    	echo json_encode($list);
    }
}
