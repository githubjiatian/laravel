<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(session('users.id'));
        //显示收货地址列表
        $list = DB::table('address')->where('uid',session('users.id'))->get();
        // dd($list);
        return view('Home.Address.index',['list' => $list]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //简便方法
        // $address = $request->input('city');
        // $str ='';
        // foreach($address as $v){
        //     $str .= DB::table('district')->where('id',$v)->first()->name;
        // }
        // dd($str);


        // dd($request->input('city.0'));
        $city0 = DB::table('district')->where('id',$request->input('city.0'))->first()->name;
        // dd($city);
        $city1 = DB::table('district')->where('id',$request->input('city.1'))->first()->name;
        $city2 = DB::table('district')->where('id',$request->input('city.2'))->first()->name;
        $city = $city0.$city1.$city2;
        $arr = ['adder'=>$city];
        // dd($arr);
        $arr += $request->except('_token','city');
        // dd(session('users.id'));
        $arr += ['uid'=>session('users.id')];
        // dd($arr);
        $row = DB::table('address')->insertGetId($arr);
        if($row>0){
            //添加成功则返回显示用户信息页面，把'添加成功带过去'
            return redirect('/home/addresss/create')->with('msg', '添加成功!');
        }else{
            //添加失败则继续在添加页面，把'添加失败信息带过去'
            return redirect('/home/ajax/demo')->with('error', '添加失败！');
        }
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除id=$id的那条数据
        $row  = DB::table('address')->where('id',$id)->delete();
         if($row>0){
            //删除成功则返回显示用户信息页面，把'删除成功信息带过去'
            return redirect('/home/addresss/create')->with('msg', '删除成功!');
        }else{
            //删除失败则继续在用户信息页面，把'删除失败信息带过去'
            return redirect('/home/addresss')->with('error', '删除失败！');
        }
    }
}
