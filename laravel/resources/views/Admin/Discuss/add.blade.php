@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加用户</h3>
        <!--返回处理信息-->
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
            <form action='/admin/discuss' method='post'>
                {{ csrf_field() }}
               
                 <div class="col-lg-4">
                    用户id：<select class="form-control m-b-10" name='uid'>
                        <option value=''>--请选择--</option>
                        @foreach($ulist as $u)
                        <option value='1'>{{ $u->id }}</option>
                        @endforeach
                    </select>
                </div>
                 <div class="col-lg-4">
                    商品id：<select class="form-control m-b-10" name='gid'>
                        <option value=''>--请选择--</option>
                        @foreach($glist as $g)
                        <option value='1'>{{ $g->id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-4">
                    评价内容：<input type="text" class="form-control m-b-10" placeholder="请评价商品" name='content'>
                </div>
                <div class="col-lg-4">
                    星级评价：<select class="form-control m-b-10" name='level'>
                        <option value=''>--请选择--</option>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                    </select>
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>

@endsection