<?php
namespace App\Http\Controllers\Home;

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
        // dd(11);
        //先写入数据库
        // dd($request);
        if(count(session('users.id'))==0){
        return redirect('/home/logins');
        }
        if(count($request->input('item_number'))){
            // dd(session('users'));
            //商品信息
            if(count(session('users.id'))!==0){
                $gd=$request->only('id','name','price','item_number');
                // dd($gd);
                $data['num']=$gd['item_number'];
                $data['total']=$gd['price']*$gd['item_number'];
                $data['gid']=$gd['id'];
                $data['name']=$gd['name'];
                $data['uid']=session('users.id');
                $data['price']=$gd['price'];
                // dd($data);
                DB::table('shopcar')->insertGetId($data);
                $ob=DB::table('shopcar')->where('uid',$data['uid'])->get();
                //金额总计
                // dd($ob);
                $amount=0;
                foreach ($ob as $k => $v) {
                    foreach ($v as $key => $value) {
                        if ($key=='total') {
                            $amount+=$value;
                        }
                    } 
                }
                // dd($amount);
                //地址信息
                $ad=DB::table('address')->where('uid',$data['uid'])->get();
                // dd($ad);
                return view('Home.Order.index',['ob'=>$ob,'ad'=>$ad],['amount'=>$amount]); 
            }
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
