<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class AddorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // dd($request->all());
        $gid=($request->input('gid'));
        $uid=session('users.id');
        $arid=($request->input('address_id'));
        $name=($request->input('gname'));
        $num=($request->input('num'));
        $money=($request->input('money'));
        $xiaomoney=($request->input('xiaomoney'));
        $damoney=($request->input('damoney'));
        $note=($request->input('note'));
        // dd($arid);
        //订单生成时间
        $t=time();
        $time=date('Y-m-d H:i:s',$t);
        //订单号
        $ordernum=$t.rand(1000,9999);
        $data=array();
        for ($i=0; $i <count($gid) ; $i++) { 
            $data['gid']=$gid[$i];
            $data['uid']=$uid;
            $data['arid']=$arid; 
            $data['name']=$name[$i];
            $data['num']=$num[$i];
            $data['money']=$money[$i];
            $data['xiaomoney']=$xiaomoney[$i];
            $data['damoney']=$damoney;
            $data['note']=$note;
            $data['flowstatus']=1;
            //订单生成时间
            $data['time']=$time;
            //订单号
            $data['ordernum']=$ordernum;
            // dd($data);
            DB::table('order')->insert($data);
            return view('Home.Payment.index',['ob'=>$data],['damoney'=>$damoney]); 
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
