<?php

namespace App\Http\Controllers\Admin;

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
    public function index(Request $request)
    {
        //保存所搜条件
        $where = '';
        //实例化操作表
        $ob = DB::table('address');
        //判断是否有所搜条件
        if($request->has('name')){
            //获取所搜的条件 
            $name = $request->input('name');
            //添加到将要携带到分页中的数组中
            $where['name'] = $name;
            //给查询添加所搜条件
            $ob->where('name','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(2);
        return view('Admin.Address.index',['list'=>$list,'where'=>$where]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Address.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //表单验证
        $this->validate($request,[
            'name' => 'required',
            'adder' => 'required',
            'cellphone' => 'required',
            ],$this->messages());
        //取除了token之外的的字段
        $data = $request->except('_token');
        // dd($data);
        //在address表中插入数据并返回id
        $row = DB::table('address')->insertGetId($data);
        if($row > 0){
            //添加成功则返回显示用户信息页面，把‘添加成功的信息带到首页’
            return redirect('/admin/address')->with('msg','添加成功');
        }else{
            //添加失败则继续在添加页面，把‘添加失败信息带到添加页面’
            return redirect('/admin/address/create')->with('error','添加失败！');
        }
    }

    //把提示自定义为中文
    public function messages(){
         return[
            'name.required' => '用户名必须填写',
            'cellphone.required' => '手机号必须填写',
            'adder.required' => '收货地址必须填写',
            'cellphone.integer' => '填写手机号请写整数',
            'cellphone.max' => '手机号不能超过11位数字',
            'telephone.integer' => '填写电话号请写整数',
            'telephone.max' => '电话号不能超过7位数字',
        ];
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
        //实例化操作表，取表中id=$id的那条数据
        $ob = DB::table('address')->where('id',$id)->first();
        //显示修改页面
        return view('Admin.Address.edit',['ob'=>$ob]);
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
         //表单验证
        $this->validate($request,[
            'name' => 'required',
            'adder' => 'required',
            'cellphone' => 'required|integer|max:11',
            ],$this->messages());
        //接受数据
        $data = $request->only('name','adder','time','post','telephone','cellphone');
        //把id相等的那条数据更新
        // dd($data);
        $row = DB::table('address')->where('id',$id)->update($data);
        if($row>0){
            //修改成功则返回显示用户信息页面，把'修改失败信息带过去'
            return redirect('/admin/address')->with('msg','修改成功');
        }else{
            //修改失败则继续在修改页面，把'修改失败信息带过去'
            return redirect('/admin/address')->with('error','修改失败');
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
        //删除id=$id的那条数据
        $row  = DB::table('address')->where('id',$id)->delete();
         if($row>0){
            //删除成功则返回显示用户信息页面，把'删除成功信息带过去'
            return redirect('/admin/address')->with('msg', '删除成功!');
        }else{
            //删除失败则继续在用户信息页面，把'删除失败信息带过去'
            return redirect('/admin/address')->with('error', '删除失败！');
        }
    }
}
