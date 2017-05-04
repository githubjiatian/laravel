<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    //去后台主页
    public function index()
    {	
    	return view('Admin.index');
    }
}
