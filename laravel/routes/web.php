<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//后台登录界面
Route::get('/', function () {
    return view('Admin.login');
});

//后台路由群
Route::group(['prefix' => 'admin','middleware' => 'login'],function(){

	//后台首页
	Route::resource('/demo1','Admin\AdminController');

	//超级用户管理
	Route::resource('/demo2','User\UserController');

	//会员管理
	Route::resource('/puser','Admin\PuserController');

	//商品评价管理
	Route::resource('/discuss','Admin\DiscussController');

	//友情链接管理
	Route::resource('/links','Admin\LinksController');

	//网站配置
	Route::resource('/config','Admin\ConfigController');

	//收货地址管理
	Route::resource('/address','Admin\AddressController');

	//后台首页
	Route::get('/demo','Admin\AdminController@index');
	

	//商品类别管理
	Route::resource('/type','Admin\TypeController');
	Route::get('/typeSon/{id}','Admin\TypeController@createSon');
	Route::post('/typeSon','Admin\TypeController@storeSon');

	//商品管理
	Route::resource('/goods','Admin\GoodsController');
	

	//订单管理
	Route::resource('/order','Admin\OrderController');

	//用户退出
	Route::get('/over','Admin\LoginController@over');
});

//后台登录
Route::get('/admin/login','Admin\LoginController@index');
Route::post('/admin/dologin','Admin\LoginController@dologin');

//后台验证码
Route::get('admin/captch/{tmp}','Admin\LoginController@captch');

//文件上传
Route::get('/upload','Upload\UploadController@index');
Route::post('/doupload','Upload\UploadController@doupload');
//**********************************************************************************************
//********************************************前台路由群组*******************************************
Route::group(['middleware'=>['config']],function(){
Route::group(['prefix'=>'home','middleware'=>'logging'],function(){

	//前台商城首页
	Route::get('/demo','Home\HomeController@index');

	//搜索页
	Route::get('/sswords','Home\SswordsController@index');
	
	//商城列表页
	Route::get('/list/{id}/{brand?}/{grade?}','Home\ListController@index');

	//商品详情页
	Route::get('/goods/{id}','Home\GoodsController@index');

	//订单页
	Route::resource('/order','Home\OrderController');
	//订单页城市联动
	Route::get('/newaddress','Home\NewaddressController@index');
	//订单页地址添加
	Route::get('/newaddressadd','Home\NewaddressaddController@index');
	//提交订单进入支付
	Route::resource('/addorder','Home\AddorderController');
	//确认收货
	Route::get('/shouhuo/{gid}','Home\ShouhuoController@index');
	//确认支付
	Route::get('/fukuan/{gid}','Home\FukuanController@index');
	//我的订单
	Route::get('/myorder','Home\MyorderController@index');

	//添加评论页
	// Route::resource('/qpj/{gid}','Home\DiscussController');

	//------------------------------
	//前台登录
	Route::get('/logins','Home\LoginController@index');
	Route::post('/dologin','Home\LoginController@dologin');

	//前台用户退出
	Route::get('/over','Home\LoginController@over');

	//前台用户注册
	Route::resource('/registers','Home\RegisterController');

	//前台购物车


	//购物流程
	Route::get('/liuchengs','Home\LiuchengController@index');

	//前台收货地址页面
	Route::resource('/addresss','Home\AddressController');

	//前台添加收货地址ajax
	Route::get('/ajaxdemo','Home\AjaxController@index');
	Route::get('/ajaxdemo/doget','Home\AjaxController@doget');
	Route::post('/ajaxdemo/dopost','Home\AjaxController@dopost');



});

//显示前台购物车
	Route::resource('/Home/shopcars','Home\ShopcarController');
	//1.添加前台购物车
	Route::get('Home/cars/{gid}','Home\ShopcarController@doadd');

	//2.添加成功中间页面，返回购物车首页
	Route::get('Home/shopcars/middle','Home\ShopcarController@index');

	//清空购物车
	Route::post('Home/cars/clear/{uid}','Home\ShopcarController@clear');

	//去结算，先到控制器，完成添加
	Route::post('/home/count','Home\CountController@adds');
});
Route::get('/config','Admin\ConfigController@setconfig');
	Route::get('/openconfig','Admin\ConfigController@kaiqiwangzhan');