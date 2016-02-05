<?php
//Route::get('/upload', 'AdminDocumentController@index');
//Route::get('/upload/show', 'AdminDocumentController@show');
Route::controller('itim', 'RegisterController');
Route::get('/',function(){
  $password = Hash::make(123);
  $pass = bcrypt(123);
  return "Taro request";
});
Route::controller('dashboard','DashboardController');
Route::controller('document','DocumentController');


Route::group(['middleware' => ['web']], function () {
    Route::controller('auth','Auth\AuthController');
    Route::any('account/login/{provider?}','Auth\AuthController@handle_login');
});

