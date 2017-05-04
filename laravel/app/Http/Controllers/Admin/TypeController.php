<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //保存搜索条件
        $where='';
        //实例化操作表
        $ob=DB::table('type');
        //判断是否有搜索条件
        if($request->has('name')){
            //获取搜索条件
            $name=$request->input('name');
            //添加到将要携带到分页中的数组中
            $where['name']=$name;
            //给查询添加where条件
            $ob->where('name','like',"%{$name}%");
        }
        //执行分页查询
        $list=$ob->paginate(20);
        return view('Admin.Type.index',['list'=>$list,'where'=>$where]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //增加分类
        return view('Admin.Type.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //添加进数据库
        $message=[
            'name.required'=>'类别名必须填写',
        ];
        $this->validate($request,[
            'name'=>'required|max:8',
        ],$message);

        $data=$request->except('_token');
        $id=DB::table('type')->insertGetId($data);
        if($id>0){
            return redirect('admin/type')->with('msg','添加成功');
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
        $data = DB::table('type')->where('id',$id)->first();
        return view('Admin.Type.edit',['ob'=>$data]);
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
        //修改
        $data = $request->only('name');
        $row = DB::table('type')->where('id',$id)->update($data);
        if($row>0){
            return redirect('admin/type')->with('msg','修改成功');
        }else{
            return redirect('admin/type')->with('error','修改失败');
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
        //
        $list = DB::table('type')->where('upid',$id)->get();
        if(count($list)>0){
            return redirect('admin/type')->with('error','要删除此类必须先删除此类下的子类');
        }

        $row = DB::table('type')->where('id',$id)->delete();
        if($row>0){
            return redirect('admin/type')->with('msg','删除成功');
        }else{
            return redirect('admin/type')->with('error','删除失败');
        }    
    }

    public function createSon($id)
    {
        $list = DB::table('type')->where('id',$id)->first();
        return view('Admin.Type.addSon',['list' => $list]);
    }

   public function storeSon(Request $request)
    {   
        // dd(11);
        $data = $request->except('_token');
        // dd($data);
        $par = DB::table('type')->where('id',$request->input('upid'))->first();

        $data['path'] = $par->path.','.$data['upid'];
        // dd($data);
        $id = DB::table('type')->insertGetId($data);
        if($id>0){
            return redirect('/admin/type')->with('msg','添加子类成功');
        }

    }
}
