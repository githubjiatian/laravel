<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;


class ShopcarController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // dd(11);
        // dd(session('users.id'));
        if(session('users.id')>0){
            //显示购物车页
            $list = DB::table('shopcar')->where('uid',session('users.id'))->get();
            return view('Home.Shopcar.index',['list' => $list]);
        }else{
            //返回登录界面
            return redirect('/home/logins');
        }
        
    }
    //添加购物车
     public function doadd($gid)
    {
        // dd(11111);
        if(session('users.id')>0){
            // dd(111111);
            // dd($gid);
            $str = '';
            $a = DB::table('goods')->where('id',$gid)->first();
            // dd($a->name.$a->brand.$a->grade.$a->weight);
            $arr =['name'=>$a->name,'description'=>$a->brand.$a->grade.$a->weight,'price'=>$a->price,'uid'=>session('users.id'),'num'=>1,'gid'=>$a->id,'picname'=>$a->picname];
            // dd($arr);
            $row = DB::table('shopcar')->insertGetId($arr);
            $list = DB::table('shopcar')->where('uid',session('users.id'))->get();
            // dd($list);
            // dd($row);
            if($row>0){
                //添加成功则返回购物车首页面，把'添加成功带过去'
                 // return view('Home.Shopcar.index',['list' => $list]);
                // return view('Home.Shopcar.middle')->with('msg','商品已添加到购物车！');
                return redirect('Home/shopcars')->with('msg','商品已添加到购物车！');
            }else{
               dd('shibai');
            }
        }else{
            //返回登录界面
            return redirect('/home/logins');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
    *清空购物车
    */
    public function clear($uid)
    {
        // dd(1111111);
         $row = DB::table('shopcar')->where('uid',$uid)->delete();
        if($row>0){
            //删除成功则返回显示用户信息页面，把'删除成功信息带过去'
            return redirect('Home/shopcars')->with('msg', '清空成功!');
        }else{
            //删除失败则继续在用户信息页面，把'删除失败信息带过去'
            return redirect('Home/shopcars')->with('error', '清空失败！');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
         $row = DB::table('shopcar')->where('id',$id)->delete();
        if($row>0){
            //删除成功则返回显示用户信息页面，把'删除成功信息带过去'
            return redirect('Home/shopcars')->with('msg', '删除成功!');
        }else{
            //删除失败则继续在用户信息页面，把'删除失败信息带过去'
            return redirect('Home/shopcars')->with('error', '删除失败！');
        }
    }
}
