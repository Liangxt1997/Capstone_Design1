<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories', 'Api\CategoriesController@index');
Route::get('/get_cate', 'Api\CategoriesController@getCate');

Route::get('/products/{id}', 'Api\ProductsController@show');
Route::get('hot/products', 'Api\ProductsController@getProductsByTag');
//donate_action
Route::post('/donate_action', 'Api\ProductsController@create');
Route::get('/news', 'Api\NewsController@index'); // 座位号 []
Route::get('/news/{id}', 'Api\NewsController@show'); // 座位号 []

Route::get('/activities', 'Api\ActivitiesController@index'); // 座位号 []
Route::get('/activities/{id}', 'Api\ActivitiesController@show'); // 座位号 []

Route::post('/orders/{id}', 'Api\OrdersController@postOrder');

Route::get('/orders/{id}', 'Api\OrdersController@index');

Route::get('/payments', 'Api\OrdersController@payments');

// id seatno, time,phone_number, payment_id, [product_id,number]
Route::get('/orders/{id}/products', 'Api\OrdersController@products');
Route::delete('/orders/{id}', 'Api\OrdersController@delete');

//用户收藏
Route::get('/collections/{id}', 'Api\CollectionsController@index');
Route::delete('/collections/{id}', 'Api\CollectionsController@delete');
// 订单状态
Route::post('/orders/status/{id}', 'Api\OrdersController@status');

Route::post('/login', 'Api\MembersController@login');// avatarUrl, nickname,openid,gender
Route::post('upload_img', 'Api\UploadController@upload');
Route::get('/members/{id}/orders', 'Api\OrdersController@index');
Route::post('/members/{id}', 'Api\MembersController@members'); //更新用户信息
Route::post('/members/{id}/comments', 'Api\ProductsController@postComment'); // content
Route::get('/members/{id}/comments', 'Api\MembersController@comments'); // 评论内容
Route::post('/members/{id}/orders', 'Api\OrdersController@postOrder');
Route::get('/members/{id}', 'Api\MembersController@show');
Route::post('/members/{id}/collections', 'Api\CollectionsController@postOrder');
Route::get('/members/{id}/collections', 'Api\CollectionsController@index');

Route::delete('/comments/{id}', 'Api\MembersController@deleteComment'); // 评论内容

Route::post('/address/{id}', 'Api\MembersController@postAddress'); // 添加地址
Route::get('/address/{id}', 'Api\MembersController@address'); // 地址列表

Route::get('/address/detail/{id}', 'Api\MembersController@getAddress'); // 地址详情
Route::post('/address/detail/{id}', 'Api\MembersController@updateAddress'); // 更新地址
// 意见反馈
Route::post('members/{id}/feedback', 'Api\MembersController@feedback');
