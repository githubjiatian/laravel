<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request);
        //保存搜索条件
        $where='';
        //实例化操作表
        $ob=DB::table('order');
        //判断是否有搜索条件
        if($request->has('ordernum')){
            //获取搜索条件
            $ordernum=$request->input('ordernum');
            //添加到将要携带到分页中的数组中
            $where['ordernum']=$ordernum;
            //给查询添加条件where
            $ob->where('ordernum','like',"%{$ordernum}%");
        }
        //执行分页查询
        $list=$ob->paginate(5);
        return view('Admin.Order.index',['list'=>$list,'where'=>$where]);
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
    public function show(Request $request, $id)
    {
        $flowstate['flowstatus']=3;
        $row=DB::table('order')->where('ordernum',$id)->update($flowstate);
        
        //保存搜索条件
        $where='';
        //实例化操作表
        $ob=DB::table('order');
        //判断是否有搜索条件
        if($request->has('ordernum')){
            //获取搜索条件
            $ordernum=$request->input('ordernum');
            //添加到将要携带到分页中的数组中
            $where['ordernum']=$ordernum;
            //给查询添加条件where
            $ob->where('ordernum','like',"%{$ordernum}%");
        }
        //执行分页查询
        $list=$ob->paginate(5);
        return view('Admin.Order.index',['list'=>$list,'where'=>$where])->with('msg','发货成功');
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
        //
    }
}
