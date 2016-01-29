<?php

//Route::get('/upload', 'AdminDocumentController@index');
//Route::get('/upload/show', 'AdminDocumentController@show');

Route::controller('itim', 'RegisterController');

Route::get('/',function(){
  $password = Hash::make(123);
  $pass = bcrypt(123);
  return "Taro request";
});

Route::controller('account','AccountController');

Route::controller('dashboard','DashboardController');

Route::controller('taro/login','taro\LoginController');
 
// Start Online Page
Route::group(['prefix'=>'taro','middleware'=>'auth','namespace'=>'taro'],function(){
 Route::get('index',function(){
 return 'Login Success!!';
 });
});
