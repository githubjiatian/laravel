@extends('Admin.base.parent')
@section('content')

<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改用户</h3>
        
            <form action='/admin/puser/{{ $ob->id }}' method='post' enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    姓名：<input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='name' value="{{ $ob->name }}">
                </div>
                <div class="col-lg-4">
                   状态： <select class="form-control m-b-10" name='status'>
                        <option value='1' @if($ob->status ==1)selected @endif>正常</option>
                        <option value='2' @if($ob->status ==2)selected @endif>禁封</option>
                    </select>
                </div>
                <div class="col-lg-4">
                   性别： <select class="form-control m-b-10" name='sex'>
                        <option value='1' @if($ob->sex ==1)selected @endif>男</option>
                        <option value='2' @if($ob->sex ==2)selected @endif>女</option>
                    </select>
                </div>
                 <div class="col-lg-4">
                    邮箱：<input type="email" class="form-control m-b-10" placeholder="请输入邮箱" name='email' value="{{ $ob->email }}">
                </div>
                <div class="col-lg-4">
                    头像：<img src="/Admin/upload/{{ $ob->pic }}" width="80px" height="35"/><input type="file" name='mypic'>
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
               
            </form>
        </div>
    </div>

@endsection