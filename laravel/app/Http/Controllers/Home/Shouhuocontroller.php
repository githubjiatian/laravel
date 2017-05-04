<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class Shouhuocontroller extends Controller
{
    //
    public function index($gid){
    	// dd($gid);
    	$data['flowstatus']=4;
    	$row=DB::table('order')->where('gid',$gid)->update($data);
    	return redirect('/home/myorder');
    }
}
