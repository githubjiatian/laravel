<?php

namespace App\Http\Controllers\Admin;

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
    public function index(Request $request)
    {
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('discuss');
        //判断是否有搜索条件
        if($request->has('level')){
            //获取搜索的条件
            $level = $request->input('level'); 
            //添加到将要携带到分页中的数组中
            $where['level'] = $level;
            //给查询添加where条件
            $ob->where('level',$level);
        }
        //执行分页查询
        $list = $ob->paginate(2);
        //显示首页（列表页）,并带值去首页
        return view('Admin.Discuss.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //查询用户表
        $udata = DB::table('user')->get();
        // dd($udata);
        //查询商品表
        $gdata = DB::table('goods')->get();
        return view('Admin.Discuss.add',['ulist' => $udata],['glist' => $gdata]);
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

        //添加表单验证
        $this->validate($request,[
            'uid' => 'required',
            'gid' => 'required',
            'content' => 'required',
            'level' => 'required',
            ],$this->messages());

        //获取传过来的内容
        $data = $request->except('_token');
        // dd($data);
        $aa = ['dtime' => time()];
        // dd($aa);
        $data += $aa;
        // dd($data);
        $row = DB::table('discuss')->insertGetId($data);
        if($row>0){
            return redirect('/admin/discuss')->with('msg','添加成功');
        }else{
            return redirect('/admin/discuss/create')->with('error','添加失败');
        }
    }

    //自定义表单验证提示信息
    public function messages(){
        return [
            'uid.required' => '用户id必须选择',
            'gid.required' => '商品id必须选择',
            'content.required' => '评价内容不能为空',
            'level.required' => '星级评价必须选择',
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
        //查出要显示的那条数据,关联商品表
        $ob = DB::table('discuss')
                ->join('goods','discuss.gid','=','goods.id')
                ->select('discuss.*','goods.name')->where('discuss.id',$id)
                ->first();

        //查出要显示的那条数据,关联用户表
        $aob = DB::table('discuss')
                ->join('user','discuss.uid','=','user.id')
                ->select('discuss.*','user.name')->where('discuss.id',$id)
                ->first();
        // dd($aob);

        //显示修改页面
        return view('Admin.Discuss.edit',['ob' => $ob],['aob' => $aob]);
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
         //添加表单验证
        $this->validate($request,[
            'content' => 'required',
            'level' => 'required',
            ],$this->messages());

        //获取数据 dd($request);
       $data = $request->only('content','level');
       // dd($data);

       //修改数据
       $row = DB::table('discuss')->where('id',$id)->update($data);
       if($row){
            return redirect('/admin/discuss')->with('msg','修改成功');
       }else{
            return redirect('/admin/discuss/edit')->with('error','修改失败');
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
        //实例化表，找出相应的数据
        $row = DB::table('discuss')->where('id',$id)->delete();
        //判断
        if($row>0){
            return redirect('/admin/discuss')->with('msg','删除成功');
        }else{
            return redirect('/admin/discuss')->with('error','删除失败');
        }
    }
}
