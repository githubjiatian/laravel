<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class Fukuancontroller extends Controller
{
    //
    public function index($gid)
    {
    	$data['flowstatus']=3;
    	$row=DB::table('order')->where('gid',$gid)->update($data);
    	return redirect('/home/demo');
    }
}
