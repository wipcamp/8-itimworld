<?php
//Route::get('/upload', 'AdminDocumentController@index');
//Route::get('/upload/show', 'AdminDocumentController@show');
Route::controller('itim', 'RegisterController');
Route::get('/',function(){
  $hash = Hash::make('1');
  if(Hash::check('1',$hash)){
    return 'true';
  }
});
Route::get('hash',function(){
    return ;
});
Route::controller('dashboard','DashboardController');
Route::controller('document','DocumentController');
Route::controller('account','AccountController');
Route::controller('profile','ProfileController');
Route::get('mail/{wip_id}/{verify}','AccountController@VerifySecond');

Route::group(['middleware' => ['web']], function () {
    Route::controller('auth','Auth\AuthController');
    Route::any('account/login/{provider?}','Auth\AuthController@handle_login');
});
