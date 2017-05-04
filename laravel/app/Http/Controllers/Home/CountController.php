<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CountController extends Controller
{
    //
    public function adds(Request $request)
    {
        // dd($request->all());
    	// dd($_POST);
    	$str_s = $_POST['str_s']; //数量---
    	$str_g = $_POST['str_g']; //gid---
    	$str_x = $_POST['str_x']; //小计---
    	$str_n = $_POST['str_n']; //商品名
        // dd($str_m);

        //获取商品id数组
        $a_g=explode(',',"$str_g");
        $b_g=array_pop($a_g);
        // dd($a_g);
        //获取数量数组
        $a_s=explode(',',"$str_s");
        $b_s=array_pop($a_s);
    	// dd($a_s);
        //获取小计数组
        $a_x=explode(',',"$str_x");
        $b_x=array_pop($a_x);
        // dd($a_x);
        $data=array();
        for ($i=0; $i <count($a_g) ; $i++) { 
            $data['num']=$a_s["$i"];
            $data['total']=$a_x["$i"];
            $row=DB::table('shopcar')->where('gid',$a_g["$i"])->update($data);   
        }
        //--------------
        $uid=session('users.id');
        $ob=DB::table('shopcar')->where('uid',$uid)->get();
        //金额总计
        // dd($ob);
        $amount=0;
        foreach ($ob as $k => $v) {
            foreach ($v as $key => $value) {
                if ($key=='total') {
                    $amount+=$value;
                }
            } 
        }
        // dd($amount);
        //地址信息
        $ad=DB::table('address')->where('uid',$uid)->get();
        // dd($ad);
        return view('Home.Order.index',['ob'=>$ob,'ad'=>$ad],['amount'=>$amount]); 

    	
    }
}
