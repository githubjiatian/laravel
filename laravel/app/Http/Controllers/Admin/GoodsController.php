<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class GoodsController extends Controller
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
        $ob=DB::table('goods');
        //判断是否有搜索条件
        if($request->has('name')){
            //获取搜索条件
            $name=$request->input('name');
            //添加到将要携带到分页参数的数组中
            $where['name']=$name;
            //给查询添加where条件
            $ob->where('name','like',"%{$name}%");
        }
        //执行分页查询
        $list=$ob->paginate(10);
        return view('Admin.Goods.index',['list'=>$list,'where'=>$where]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $list=DB::table('type')->get();
        // dd($list);
        return view('Admin.Goods.add',['list'=>$list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->All());
        // dd($request->except('_token'));
        //不能选着上层商品分类添加商品
        $tid=($request->input('tid'));
        // dd($id);
        $list=DB::table('type')->where('upid',$tid)->get();
        // dd(count($list));
        if(count($list)>0){
            return redirect('/admin/goods')->with('error','不能选着顶层分类添加商品');
        }
        // dd($request->All());
        
        //商品字段必须填写
        $message = [
            'name.required' => '商品名称必须填写',
            'price.required'=> '价格必须填写',
            'price.integer'=> '价格需添数字',
            'brand.required'=> '品牌必须选择',
            'grade.required'=> '等级必须选择',
            'weight.required'=> '重量必须选择',
            'purpose.required'=> '用途必须选择',
            'place.required'=> '产地必须添加',
            'picktime.required'=> '采摘时间必须添加',
            'num.required'=> '数量必须添加',
            'navigation.required'=> '导航商品必须选择',
            'goodstuff.required'=> '是否推荐商品必须添加',
            'sell.required'=> '上架/下架必须选择',
            'picname.required'=> '图片必须选择',
        ];
        $this->validate($request, [
            'name' => 'required',
            'price'=> 'required|integer',
            'brand'=> 'required',
            'grade'=> 'required',
            'weight'=> 'required',
            'purpose'=> 'required',
            'place'=> 'required',
            'picktime'=> 'required',
            'num'=> 'required',
            'navigation'=> 'required',
            'goodstuff'=> 'required',
            'sell'=> 'required',
            'picname'=> 'required',
        ],$message);
        
        //商品图片
        //判断是否有文件上传
        if($request->hasFile('picname')){
            //判断上传文件是否有效
            if($request->file('picname')->isValid()){
                //获取上传的文件对象
                $pic=$request->file('picname');
                //获取上传的文件的后缀
                $ext = $pic->getClientOriginalExtension();
                //拼装出你需要使用的文件名
                $picname=time().rand(1000,9999).'.'.$ext;
                $picnamedata['picname']=$picname;
                //移动到临时文件,生成新文件到指定目录下
                $pic->move('./Admin/good/img',$picname);
                // DB::table('goods')->insert($picnamedata);
                // insert into goods('picname') values($picname);
                // echo '商品图片添加成功';  
            }
        }

        // $name=($request->input('name'));
        //讲商品加入到商品表

        $data=$request->except('_token','picname');
        // dd($data);
        $data+=$picnamedata;
        // dd($data);
        $idnum=DB::table('goods')->insertGetId($data);
        if($idnum>0){
          return redirect('admin/goods')->with('msg','添加成功');
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

        $data=DB::table('goods')->where('id',$id)->first();
        return view('Admin.Goods.edit',['ob'=>$data]);
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
        // dd($request->except('_token'));
        //商品字段必须填写
        $message1= [
            'name.required' => '商品名称必须填写',
            'price.required'=> '价格必须填写',
            'price.integer'=> '价格需添数字',
            'brand.required'=> '品牌必须选择',
            'grade.required'=> '等级必须选择',
            'weight.required'=> '重量必须选择',
            'purpose.required'=> '用途必须选择',
            'place.required'=> '产地必须添加',
            'picktime.required'=> '采摘时间必须添加',
            'num.required'=> '数量必须添加',
            'navigation.required'=> '导航商品必须选择',
            'goodstuff.required'=> '是否推荐商品必须添加',
            'sell.required'=> '上架/下架必须选择',
            'picname.required'=> '图片必须选择',
        ];
        $this->validate($request, [
            'name' => 'required',
            'price'=> 'required|integer',
            'brand'=> 'required',
            'grade'=> 'required',
            'weight'=> 'required',
            'purpose'=> 'required',
            'place'=> 'required',
            'picktime'=> 'required',
            'num'=> 'required',
            'navigation'=> 'required',
            'goodstuff'=> 'required',
            'sell'=> 'required',
            'picname'=> 'required',
        ],$message1);

        // dd($request->except('_token'));
        if($request->hasFile('picname')){
            // dd(11);
            //判断上传文件是否有效
            if($request->file('picname')->isValid()){
                //获取上传的文件对象
                $pic=$request->file('picname');
                //获取上传的文件的后缀
                $ext = $pic->getClientOriginalExtension();
                //拼装出你需要使用的文件名
                $picname=time().rand(1000,9999).'.'.$ext;
                $picnamedata['picname']=$picname;
                //移动到临时文件,生成新文件到指定目录下
                $pic->move('./Admin/good/img',$picname);
                // DB::table('goods')->insert($picnamedata);
                // insert into goods('picname') values($picname);
                // echo '商品图片添加成功';  
            }
        }
        //插入数据库
        // dd($id);
        // dd($request->except('_token'));
        $data=$request->except('_token','_method','picname');
        // dd($data);
        $data+=$picnamedata;
        // dd($data);
        // dd($id);
        $row=DB::table('goods')->where('id',$id)->update($data);
        // dd($row);
        if($row>0){
            return redirect('admin/goods')->with('msg','修改成功');
        }else{
            return redirect('admin/goods')->with('error','修改失败');
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
        $row=DB::table('goods')->where('id',$id)->delete();
        if($row>0){
            return redirect('admin/goods')->with('msg','删除成功');
        }else{
            return redirect('admin/goods')->with('error','删除失败');
        }
    }
}
