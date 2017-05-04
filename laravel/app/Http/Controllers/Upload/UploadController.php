<?php

namespace App\Http\Controllers\Upload;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

class UploadController extends Controller
{
    //
    public function index()
    {
    	return view('Upload.upload');
    }
    public function doupload(Request $request)
    {
    	//判断是否有上传文件mypic
    	if($request->hasFile('mypic')){
    		//再判断上传文件是否可用
    		if($request->file('mypic')->isValid()){
    			//上传文件可用   获取文件
    			$data = $request->file('mypic');
    			//获取文件后缀
    			$ext = $data->getClientOriginalExtension();
    			//随机生成新文件名
    			$picname = time().rand(1000,9999).'.'.$ext;
    			//移动临时文件，生成新文件到指定目录下
    			$data->move('./admin/upload',$picname);
    			if($data->getError()>0){
    				echo '上传失败';
    			}else{
    				echo '上传成功';
    				echo "<img src='./admin/upload/{$picname}' width='200' height='200'>";
    			}
    		}
    	}
    	
    }
}
