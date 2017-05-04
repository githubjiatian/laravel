@extends('Admin.base.parent')
@section('content')

<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改用户</h3>
        <!--显示处理信息-->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action='/admin/config/{{ $ob->id }}' method='post' enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    网站名：<input type="text" class="form-control m-b-10" placeholder="请输入网站名" name='name' value="{{ $ob->name }}">
                </div>
                <div class="col-lg-4">
                    版权：<input type="text" class="form-control m-b-10" placeholder="请输入版权信息" name='copy' value="{{ $ob->copy }}">
                </div>
                <div class="col-lg-4">
                   状态： <select class="form-control m-b-10" name='status'>
                        <option value='1' @if($ob->status ==1)selected @endif>正常</option>
                        <option value='2' @if($ob->status ==2)selected @endif>维护中</option>
                    </select>
                </div>
                 <div class="col-lg-4">
                    邮箱：<input type="email" class="form-control m-b-10" placeholder="请输入邮箱" name='email' value="{{ $ob->email }}">
                </div>
                <div class="col-lg-4">
                    logo：<img src="/Admin/upload/{{ $ob->logo }}" width="80px" height="35"/><input type="file" name='mypic'>
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
               
            </form>
        </div>
    </div>

@endsection