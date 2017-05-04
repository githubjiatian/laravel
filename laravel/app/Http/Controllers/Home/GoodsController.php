<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class GoodsController extends Controller
{
    //
    public function index($id)
    {	
    	$ob=DB::table('goods')->where('id',$id)->get();
    	// dd($ob);
    	//详情用
    	$random1 = DB::table('goods')
        ->inRandomOrder()
        ->first();
        $random2 = DB::table('goods')
        ->inRandomOrder()
        ->first();
        $random3 = DB::table('goods')
        ->inRandomOrder()
        ->first();
        $random4 = DB::table('goods')
        ->inRandomOrder()
        ->first();
        // dd($random1);

    	return view('Home.Goods.index',['ob'=>$ob,'random1'=>$random1,'random2'=>$random2,'random3'=>$random3,'random4'=>$random4]);
    }
}
