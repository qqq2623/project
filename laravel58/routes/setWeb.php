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

use App\Model\AdminUser;
Route::any("admin" , "SingleShow");

Route::resource("resource" , "ResourceController");



Route::any("show" , "IndexController@show");



Route::any("enter" , "AdminController@enter");



Route::any("login" , "AdminController@login");



Route::any("queue" , function(){

//    $a = Redis::get("zhangyu");
//    dd($a);
	$userInfo  =  "消息队列";
	\App\Jobs\QueueJob::dispatch($userInfo)->onQueue("{zhangyu}");
	echo "我完成了";
});