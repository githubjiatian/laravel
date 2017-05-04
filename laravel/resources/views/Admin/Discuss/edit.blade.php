@extends('Admin.base.parent')
@section('content')

<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">用户详情</h3>
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
            <form action='/admin/discuss/{{ $ob->id }}' method='post' enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                 <div class="col-lg-4">
                    评论的商品：<input type="text" class="form-control m-b-10" placeholder="请输入评论的商品" name='content' disabled="" value="{{ $ob->name }}">
                </div>
                <div class="col-lg-4">
                    评论内容：<input type="text" class="form-control m-b-10" placeholder="请输入评论内容" name='content' value="{{ $ob->content }}">
                </div>
                <div class="col-lg-4">
                    星级： <select class="form-control m-b-10" name='level'>
                        <option value='1' @if($ob->level ==1)selected @endif>一星</option>
                        <option value='2' @if($ob->level ==2)selected @endif>二星</option>
                        <option value='3' @if($ob->level ==3)selected @endif>三星</option>
                        <option value='4' @if($ob->level ==4)selected @endif>四星</option>
                        <option value='5' @if($ob->level ==5)selected @endif>五星</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    评论人：<input type="text" class="form-control m-b-10" placeholder="请输入评论人" name='content' disabled="" value="{{ $aob->name }}">
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='修改'>
                </div>
               
            </form>
        </div>
    </div>

@endsection