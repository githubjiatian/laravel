@extends('Admin.base.parent')
@section('content')

	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加友情链接</h3>

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

        <div class="row">
            <form action='/admin/links' method='post' enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入链接名称" name='name'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请输入地址" name='url'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="描述本链接" name='description'>
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="请点击‘浏览’上传logo" disabled="" >
                </div>
                <div class="col-lg-4">
                    <input type="file" name='mypic'>
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>

@endsection