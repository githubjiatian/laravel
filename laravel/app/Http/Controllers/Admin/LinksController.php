<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('links');
        if($request->has('name')){
            //获取搜索的条件
            $name = $request->input('name');
            //添加到将要携带到分页中的数组中
            $where['name'] = $name;
            //给查询添加where条件
            $ob->where('name','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(2);
        return view('Admin.Links.index',['list'=>$list,'where'=>$where]);
    }

    //把提示信息自定义为中文的
    public function messages()
    {
        return[
            'name.required' => '链接名必须填写',
            'url.required' => 'url地址不能为空',
            'description.required' => '描述不能为空',
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加界面
        return view('Admin.Links.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  添加表单验证，表单验证不成功则会英语提示
        $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
            'description' => 'required',
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

        //取除了token之外的字段
        $data = $request->except('_token','mypic');
        $data += $aa;
        //dd($data);
        //在admin表中插入数据并返回id
        $row = DB::table('links')->insertGetId($data);

         session(['youlian'=>$data]);

        if($row>0){
            //添加成功则返回显示用户信息页面，把'添加成功带过去'
            return redirect('/admin/links')->with('msg', '添加成功!');
        }else{
            //添加失败则继续在添加页面，把'添加失败信息带过去'
            return redirect('/admin/links/create')->with('error', '添加失败！');
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
        //实例化操作表，取表中id=$id的那条数据
        $ob = DB::table('links')->where('id',$id)->first();
        //dd($id);
        //显示视图，并把参数ob带到模板页面
        return view('Admin.Links.edit',['ob'=>$ob]);
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
            'url' => 'required',
            'description' => 'required',
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
        $data = $request->only('name','url','description');
        $data += $aa;
        // dd($data);
        $row = DB::table('links')->where('id',$id)->update($data);
        if($row>0){
            //修改成功则返回显示用户信息页面，把'修改失败信息带过去'
            return redirect('/admin/links')->with('msg', '修改成功!');
        }else{
            //修改失败则继续在修改页面，把'修改失败信息带过去'
            return redirect('/admin/links')->with('error', '修改失败！');
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
         //dd($id);
        $row = DB::table('links')->where('id',$id)->delete();
        if($row>0){
            //删除成功则返回显示用户信息页面，把'删除成功信息带过去'
            return redirect('/admin/links')->with('msg', '删除成功!');
        }else{
            //删除失败则继续在用户信息页面，把'删除失败信息带过去'
            return redirect('/admin/links')->with('error', '删除失败！');
        }
    }

}
