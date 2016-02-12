<?php
Route::controller('itim', 'RegisterController');



Route::get('mail/{wip_id}/{verify}','AccountController@VerifySecond');
Route::controller('profile','ProfileController');
Route::controller('question','QuestionController');
Route::group(['middleware' => ['web']], function () {
    Route::controller('auth','Auth\AuthController');
    Route::any('accounts/login/{provider?}','Auth\AuthController@handle_login');
    Route::controller('account','AccountController');
    Route::get('logout','AccountController@getLogout');
    Route::group(['middleware' => ['web','checkpermission']], function () {
        Route::controller('dashboard','DashboardController');
        Route::get('session',function(){
          return Session::get('user');
        });
        Route::get('/',function(){
          $value = Session::get('user');
          return $value;
        });
        
        
    });
    
    
});
Route::controller('document','DocumentController');
