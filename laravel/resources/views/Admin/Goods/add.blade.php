@extends('Admin.base.parent')
@section('content')
<div class="block-area" id="text-input">
     @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
     @endif
         <form action="{{ url('/admin/goods')}}" method='post' enctype='multipart/form-data'>
             {{csrf_field()}}
             
            <!-- tid -->
            <div class="row">
                <div class="col-lg-6">
                    <select  class="form-control m-b-10" name='tid'>
                        <option >--请选择分类--</option>
                        @foreach($list as $v)
                            <option  value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- name -->
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品名" name='name'>
                </div>
            </div>
            <!-- price -->
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="请输入价格" name="price">
                </div>
            </div>
            <!-- brand -->
            <div class="form-group m-b-15">
                <p>请选择品牌</p>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="brand" value="徽六牌">
                    </span>
                    徽六牌
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio"> 
                        <input type="radio" class="validate[required]" name="brand" value="谢裕大">
                    </span>
                    谢裕大
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="brand" value="碧螺春">
                    </span>
                    碧螺春
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="brand" value="张家山">
                    </span>
                    张家山
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="brand" value="宋品">
                    </span>
                    宋品
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="brand" value="其他">
                    </span>
                    其他
                </label>
            </div>

            <!-- grade -->
            <div class="form-group m-b-15">
            <p>请选择等级</p>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="grade" value="精品级">
                    </span>
                    精品级
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="grade" value="AAA级">
                    </span>
                    AAA级
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="grade" value="特级">
                    </span>
                    特级
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="grade" value="其他">
                    </span>
                    其他
                </label>
            </div>
            <!-- weight -->
            <div class="form-group m-b-15">
            <p>请选择净重</p>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="weight" value="50克(一两)">
                    </span>
                    50克(一两)
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="weight" value="250克(半斤)">
                    </span>
                    250克(半斤)
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="weight" value="500克(一斤)">
                    </span>
                    500克(一斤)
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="weight" value="其他">
                    </span>
                    其他
                </label>
            </div>
            <!-- purpose -->
           <div class="form-group m-b-15">
            <p>请选择用途</p>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="purpose" value="送礼">
                    </span>
                    送礼
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="purpose" value="自饮">
                    </span>
                    自饮
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="purpose" value="其他">
                    </span>
                    其他
                </label>
            </div>
            <!-- place -->
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="请输入产地" name="place">
                </div>
            </div>
            <!-- picktime -->
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="请输入采摘时间" name="picktime">
                </div>
            </div>
            <!-- picname -->
            <div class="row">
                    商品上传: 
                    <input class="btn btn-sm m-t-10" type="file" name='picname'>
            </div>
            <!-- num -->
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="请输入数量" name="num">
                </div>
            </div>
            <!-- navigation -->
            <div class="form-group m-b-15">
            <p>是否是导航商品</p>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="navigation" value="1">
                    </span>
                    是
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="navigation" value="0">
                    </span>
                    否
                </label>
            </div>
            <!-- goodstuff -->
            <div class="form-group m-b-15">
            <p>是否是推荐商品</p>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="goodstuff" value="1">
                    </span>
                    是
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="goodstuff" value="0">
                    </span>
                    否
                </label>
            </div>
            <!-- sell -->
            <p>是否是上架</p>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="sell" value="1">
                    </span>
                    上架
                </label>
                <label class="radio-inline">
                    <span class="checkableBox checkableBox-radio">    
                        <input type="radio" class="validate[required]" name="sell" value="0">
                    </span>
                    下架
                </label>
            </div>
            <!-- 提交 -->
            <div class="row">
                <div class="col-lg-12">
                    <input type="submit" class="btn btn-block btn-alt" value='提交'>
                </div>
            </div>
        </form>
 </div>
@endsection