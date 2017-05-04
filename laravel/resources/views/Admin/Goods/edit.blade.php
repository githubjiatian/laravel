@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改商品</h3>
        <div class="row">
            <form action='{{ url("admin/goods")."/".$ob->id }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
					
		            <!-- name -->
		            <p>填空修改商品名称</p>
		            <div class="row">
		                <div class="col-lg-6">
		                    <input type="text" class="form-control m-b-10" placeholder="请输入商品名" value='{{$ob->name}}' name='name'>
		                </div>
		            </div>
		            <!-- price -->
		            <p>填空修改商品价格</p>
		            <div class="row">
		                <div class="col-lg-6">
		                    <input type="text" class="form-control m-b-10" placeholder="请输入价格" value='{{$ob->price}}' name="price">
		                </div>
		            </div>

		            <!-- brand -->
		            <div class="form-group m-b-15">
		            	<div class="row">
		                <!-- 原品牌.. -->
		                	<p>原商品品牌</p>  
			                <label class="radio-inline">
			                    <span class="checkableBox checkableBox-radio"> 
			                        <input type="radio" class="validate[required]" name="brand" value="{{$ob->brand}}" checked>
			                    </span>
			                    {{$ob->brand}}
			                </label>
		                </div>
		                <!-- 请选择新品牌 -->
		                <p></p>
		                <div class="row">
		                	<p>请选择商品新品牌</p>
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
		            </div>
					
		            <!-- grade -->
		            <div class="form-group m-b-15">
		            	<div class='row'>
			            	<p>原商品等级</p>
			                <!-- 原等级.. -->
			                <label class="radio-inline">
			                    <span class="checkableBox checkableBox-radio">    
			                        <input type="radio" class="validate[required]" name="grade" value="{{$ob->grade}}" checked>
			                    </span>
			                    {{$ob->grade}}
			                </label>
		                </div>
		                <p></p>
		                
		                <div class='row'>

			                <!-- 请选择新品牌 -->
			                <p>请选择商品新等级</p>
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
		            </div>
		            <!-- weight -->
		            <div class="form-group m-b-15">
		            <div class='row'>
		            	<p>原商品净重</p>
		                <!-- 原等级.. -->
		                <label class="radio-inline">
		                    <span class="checkableBox checkableBox-radio">    
		                        <input type="radio" class="validate[required]" name="weight" value="{{$ob->weight}}" checked>
		                    </span>
		                    {{$ob->weight}}
		                </label>
	                </div>
	                <p></p>
		                <!-- 新净重 -->
		            <div class='row'>
		            <p>请选择商品新净重</p>
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
		            </div>
		            <!-- purpose -->
		            <div class='row'>
		            	<p>原商品用途</p>
		            	<label class="radio-inline">
		                    <span class="checkableBox checkableBox-radio">    
		                        <input type="radio" class="validate[required]" name="purpose" value="{{$ob->purpose}}" checked>
		                    </span>
		                    {{$ob->purpose}}
		                </label>
		            </div>
		            <p></p>
		           <div class="form-group m-b-15">
		           <div class='row'>
		            <p>请选择新用途</p>
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
		            </div>
		            <!-- place -->
		            <div class="row">
		                <div class="col-lg-6">
		                    <input type="text" class="form-control m-b-10" placeholder="请输入产地"  value='{{$ob->place}}'name="place">
		                </div>
		            </div>
		            <!-- picktime -->
		            <div class="row">
		                <div class="col-lg-6">
		                    <input type="text" class="form-control m-b-10" placeholder="请输入采摘时间" value='{{$ob->picktime}}' name="picktime">
		                </div>
		            </div>
		           
		            <!-- picname -->
		            <div class="row">
		                <!-- <form action='/admin/goods' method='post' enctype='multipart/form-data'> -->
		                    原商品图片: 
		                    <img src="/Admin/good/img/{{ $ob->picname }}" alt="正在加载中" width='200'>
		                <!-- </form> -->
	                </div>
	                <p>商品上传:</p>
	                <div class="row">
	                    <input class="btn btn-sm m-t-10" type="file" name='picname'>
		            </div>
		            
		            <!-- num -->
		            <div class="row">
		            	<p>原商品数量</p>
		                <div class="col-lg-6">
		                    <input type="text" class="form-control m-b-10" placeholder="请输入数量" name="num" value='{{$ob->num}}'>
		                </div>
		            </div>
		            <!-- navigation -->
		            <div class="form-group m-b-15">
		            <p>原商品是否为导航商品</p>
		                <label class="radio-inline">
		                    <span class="checkableBox checkableBox-radio">    
		                        <input type="radio" class="validate[required]" name="navigation" value="{{$ob->navigation}}" @if($ob->navigation==1)checked @endif>
		                    是
		                </label>
		                <label class="radio-inline">
		                    <span class="checkableBox checkableBox-radio">    
		                        <input type="radio" class="validate[required]" name="navigation" value="{{$ob->navigation}}" @if($ob->navigation!==1)checked @endif>
		                    否
		                </label>
	                </div>
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
		            <p>原商品是否为推荐商品</p>
		                <label class="radio-inline">
		                    <span class="checkableBox checkableBox-radio">    
		                        <input type="radio" class="validate[required]" name="goodstuff" value="{{$ob->goodstuff}}" @if($ob->goodstuff==1)checked @endif>
		                    </span>
		                    是
		                </label>
		                <label class="radio-inline">
		                    <span class="checkableBox checkableBox-radio">    
		                        <input type="radio" class="validate[required]" name="goodstuff" value="{{$ob->goodstuff}}" @if($ob->goodstuff!==1)checked @endif>
		                    </span>
		                    否
		                </label>
	                </div>
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
		            <p>原商品是否是上架</p>
		                <label class="radio-inline">
		                    <span class="checkableBox checkableBox-radio">    
		                        <input type="radio" class="validate[required]" name="sell" value="{{$ob->sell}}" @if($ob->sell==1)checked @endif>
		                    </span>
		                    上架
		                </label>
		                <label class="radio-inline">
		                    <span class="checkableBox checkableBox-radio">    
		                        <input type="radio" class="validate[required]" name="sell" value="{{$ob->sell}}" @if($ob->sell!==1)checked @endif>
		                    </span>
		                    下架
		                </label>
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
		        <p></p>
		    </div>
		</form>
@endsection