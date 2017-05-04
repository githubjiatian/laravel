<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class ConfigController extends Controller
{
    //
    public function index()
    {
    	 //实例化操作表
        $list = DB::table('config')->get();
    	return view('Admin.Config.index',['list'=>$list]);
    }


     public function edit($id)
    {
         //实例化操作表，取表中id=$id的那条数据
        $ob = DB::table('config')->where('id',$id)->first();
        //dd($id);
        //显示视图，并把参数ob带到模板页面
        return view('Admin.Config.edit',['ob'=>$ob]);
    }

    //加载网站维护的页面
    public function setconfig()
    {
        return view('Down.index');
    }

    


     //把提示信息自定义为中文的
    public function messages()
    {
        return[
            'name.required' => '网站名必须填写',
            'status.required' => '状态必须填写',
            'copy.required' => '版权必须填写',
        ];
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
    	 //  添加表单验证，表单验证不成功则会英语提示
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
            'copy' => 'required',
            ],$this->messages());

         //定义一个数组存储传过来的图片
        $aa = [];
        //判断是否有文件上传
        if($request->hasFile('mypic')){
            // 判断上传的文件是否有效
            if($request->file('mypic')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('mypic');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                $data->move('./Admin/upload',$picname);
                $aa = ['logo' => $picname];
            }
        }

        //只取传过来的数据中的name和sex字段
        $data = $request->only('name','copy','email','status');
        $data += $aa;
        // dd($data);
        $row = DB::table('config')->where('id',$id)->update($data);

        //把配置信息存入session
        session(['config'=>$data]);
        if($row>0){
                  //修改成功则返回显示用户信息页面，把'修改失败信息带过去'
                return redirect('/admin/config')->with('msg', '修改成功!');
        }else{
            //修改失败则继续在修改页面，把'修改失败信息带过去'
            return redirect('/admin/config')->with('error', '修改失败！');
        }
    }

}
