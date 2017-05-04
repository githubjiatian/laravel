<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;



class ListController extends Controller
{
    //

    public function index(Request $request,$id,$brand=1,$grade=1){
    	    // dd($brand,$grade);
    	//顶层分类
    	// dd($brand);
    	// dd($grade);
    	// if($grade!=null){var_dump($brand);die;}

    	//筛选商品
    		//品牌被选------------------------------------------------------------------------------------
    	if($brand!==1){
    		// dd($brand);
    		// dd($id);
    		// $wbrand=['brand']=$brand;

    		//品牌选择,等级没选-----------------------------------------------------
    		if($grade==1){
    			// dd($brand,$grade);
    			//从商品分类进入商品列表
    			$list=DB::table('type')->where('upid',$id)->get();
		    	if(count($list)==0){
		    		$ob=DB::table('goods')->where('tid',$id)->where('brand',$brand)->orderBy('price', 'desc')->get();
		    		// dd($ob);
		    		// dd($brand);
		    		return view('Home.List.index',['ob'=>$ob,'id'=>$id,'brand'=>$brand,'grade'=>$grade]);
		    	}
		    	// $list=DB::table('type')->where('id',$id)->get();
		    	// dd($list);
		    	//非顶级分类
		    	$data=array();
		    	foreach ($list as $k => $v) {
		    		foreach ($v as $key => $value) {
		    			if($key=='id'){$data[]=$value;};
		    			// $data[]=$v;
		    		}
		    	}
		    	// dd($data);
		    	// $res=implode(',',$data);
		    	// dd($res);
		    	$res=DB::table('goods')->whereIn('tid',$data)->where('brand',$brand)->orderBy('price', 'desc')->get();
		    	// dd($res);
		    	// dd($brand);
		    	return view('Home.List.index',['ob'=>$res,'id'=>$id,'brand'=>$brand,'grade'=>$grade]);
    			}
    		// 品牌选择,等级也选-----------------------------------------------------
		    	if($grade!==1){
		    		// dd($brand,$grade);
	    			//从商品分类进入商品列表
	    			$list=DB::table('type')->where('upid',$id)->get();
			    	if(count($list)==0){
			    		$ob=DB::table('goods')->where('tid',$id)->where('brand',$brand)->where('grade',$grade)->orderBy('price', 'desc')->get();
			    		// dd($ob);
			    		// dd($brand);
			    		return view('Home.List.index',['ob'=>$ob,'id'=>$id,'brand'=>$brand,'grade'=>$grade]);
			    	}
			    	// $list=DB::table('type')->where('id',$id)->get();
			    	// dd($list);
			    	//非顶级分类
			    	$data=array();
			    	foreach ($list as $k => $v) {
			    		foreach ($v as $key => $value) {
			    			if($key=='id'){$data[]=$value;};
			    			// $data[]=$v;
			    		}
			    	}
			    	// dd($data);
			    	// $res=implode(',',$data);
			    	// dd($res);
			    	$res=DB::table('goods')->whereIn('tid',$data)->where('brand',$brand)->where('grade',$grade)->orderBy('price', 'desc')->get();
			    	// dd($res);
			    	// dd($brand);
			    	return view('Home.List.index',['ob'=>$res,'id'=>$id,'brand'=>$brand,'grade'=>$grade]);
	    			}
    			}
    		//品牌未被选-----------------------------------------------------
    			if($brand==1){
    				//等级也未被选
    				if($grade==1){
    					//等级被选
    					//品牌默认,等级默认-----------------------------------------------------
				    	//从商品分类进入商品列表
				    	$list=DB::table('type')->where('upid',$id)->get();
				    	if(count($list)==0){
				    		$ob=DB::table('goods')->where('tid',$id)->orderBy('price', 'desc')->get();
				    		// dd($ob);
				    		return view('Home.List.index',['ob'=>$ob,'id'=>$id,'brand'=>$brand,'grade'=>$grade]);
				    	}
				    	// $list=DB::table('type')->where('id',$id)->get();
				    	// dd($list);
				    	//非顶级分类
				    	$data=array();
				    	foreach ($list as $k => $v) {
				    		foreach ($v as $key => $value) {
				    			if($key=='id'){$data[]=$value;};
				    			// $data[]=$v;
				    		}
				    	}
				    	// dd($data);
				    	// $res=implode(',',$data);
				    	// dd($res);
				    	$res=DB::table('goods')->whereIn('tid',$data)->orderBy('price', 'desc')->get();
				    	// dd($res);
				    	return view('Home.List.index',['ob'=>$res,'id'=>$id,'brand'=>$brand,'grade'=>$grade]);
				    }
    				
    				if($grade!==1){
    					//品牌默认,等级被选
    					$list=DB::table('type')->where('upid',$id)->get();
				    	if(count($list)==0){
				    		$ob=DB::table('goods')->where('tid',$id)->where('grade',$grade)->orderBy('price', 'desc')->get();
				    		// dd($ob);
				    		return view('Home.List.index',['ob'=>$ob,'id'=>$id,'brand'=>$brand,'grade'=>$grade]);
				    	}
				    	// $list=DB::table('type')->where('id',$id)->get();
				    	// dd($list);
				    	//非顶级分类
				    	$data=array();
				    	foreach ($list as $k => $v) {
				    		foreach ($v as $key => $value) {
				    			if($key=='id'){$data[]=$value;};
				    			// $data[]=$v;
				    		}
				    	}
				    	// dd($data);
				    	// $res=implode(',',$data);
				    	// dd($res);
				    	$res=DB::table('goods')->whereIn('tid',$data)->where('grade',$grade)->orderBy('price', 'desc')->get();
				    	// dd($res);
				    	return view('Home.List.index',['ob'=>$res,'id'=>$id,'brand'=>$brand,'grade'=>$grade]);
    				}
    			}
    		}
}
