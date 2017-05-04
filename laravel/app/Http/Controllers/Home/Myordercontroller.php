<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class Myordercontroller extends Controller
{
    //
	public function index()
	{
	$user=session("users.id");
	$all=DB::table('order')->where('uid',$user)->get();
	$q=DB::table('order')->where('uid',$user)->where('flowstatus',1)->get();
	$w=DB::table('order')->where('uid',$user)->where('flowstatus',2)->get();
	$e=DB::table('order')->where('uid',$user)->where('flowstatus',3)->get();
	$r=DB::table('order')->where('uid',$user)->where('flowstatus',4)->get();
	// dd($q);
	// dd($w);
	// dd($e);
	// dd($r);
	return view('Home.Myorder.index',['all'=>$all,'q'=>$q,'w'=>$w,'e'=>$e,'r'=>$r]);
	}
}
