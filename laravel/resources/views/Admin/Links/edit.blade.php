@extends('Admin.base.parent')
@section('content')

<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改友情链接</h3>
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
        
            <form action='/admin/links/{{ $ob->id }}' method='post' enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    链接名：<input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='name' value="{{ $ob->name }}">
                </div>
                <div class="col-lg-4">
                    url地址：<input type="text" class="form-control m-b-10" placeholder="请输入url地址" name='url' value="{{ $ob->url }}">
                </div>
                <div class="col-lg-4">
                    描述本链接：<input type="text" class="form-control m-b-10" placeholder="请描述本链接" name='description' value="{{ $ob->description }}">
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