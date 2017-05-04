<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LiuchengController extends Controller
{
    //显示购物流程
    public function index()
    {
    	return view('Home.Liucheng.index');
    }
}
