@extends('Admin.base.parent')
@section('content')

<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改收货地址</h3>
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

            <form action='/admin/address/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                   姓名 <input type="text" class="form-control m-b-10" placeholder="请输入姓名" name='name'  value="{{ $ob->name }}">
                </div>
                <div class="col-lg-4">
                  收货地址  <input type="text" class="form-control m-b-10" placeholder="请输入收货地址" name='adder'  value="{{ $ob->adder }}">
                </div>
                 <div class="col-lg-4">
                    邮政编码<input type="text" class="form-control m-b-10" placeholder="请输入邮政编码" name='post'  value="{{ $ob->post }}">
                </div>
                <div class="col-lg-4">
                 收货时间   <select class="form-control m-b-10" name='time'>
                        <option value='1' @if($ob->time===1) selected @endif>收货时间：任何时候 </option>
                        <option value='2' @if($ob->time===2) selected @endif>收货时间：工作日</option>
                        <option value='3' @if($ob->time===3) selected @endif>收货时间：周末</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    固定电话<input type="text" class="form-control m-b-10" placeholder="请输入固定电话" name='telephone'  value="{{ $ob->telephone }}">
                </div>
                <div class="col-lg-4">
                    手机号<input type="text" class="form-control m-b-10" placeholder="请输入手机号" name='cellphone'  value="{{ $ob->cellphone }}">
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
               
            </form>
        </div>
    </div>

@endsection