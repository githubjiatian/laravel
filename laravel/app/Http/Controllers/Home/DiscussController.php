<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class DiscussController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($gid)
    {
        //
        $qpj = DB::table('goods')->where('id',$gid)->first();
        // dd($qpj->name);
        return view('Home.Discuss.index',['qpj'=>$qpj]);
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
        // dd($request);
        $dtime = time();
        $content = $request->input('content');
        $level = $request->input('level');
        $gid = $request->input('gid');
        $uname = session('users.name');
        $uid = session('users.id');
        // dd($gid);
        $ss = ['content'=>$content,'dtime'=>$dtime,'gid'=>$gid,'uname'=>$uname,'uid'=>$uid,'level'=>$level];
        // dd($ss);
        $row = DB::table('discuss')->insertGetId($ss);
        if($row>0){
            //修改订单装填
            $ww = ['flowstatus'=>5];
            DB::table('order')->where('gid',$gid)->update($ww);
            //添加成功则返回显示用户信息页面，把'添加成功带过去'
            return redirect('/home/myorder')->with('msg', '评价成功!');
        }else{
            //添加失败则继续在添加页面，把'添加失败信息带过去'
            return redirect('/home/qpj')->with('error', '评价失败！');
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
        //
    }
}
