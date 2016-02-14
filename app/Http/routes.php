<?php
Route::controller('itim', 'RegisterController');



//Route::get('mail/{wip_id}/{verify}','AccountController@VerifySecond');
Route::group(['middleware' => ['web']], function () {
    Route::controller('auth','Auth\AuthController');
    Route::controller('account','AccountController');




    Route::controller('question','QuestionController');
    Route::group(['middleware' => ['web','acl']], function () {
    Route::controller('profile','ProfileController');
    });






    //social login
    //Route::get('/facebook/connect', 'Auth/connect')










    Route::get('/',function(){
     //dd(\Auth::user());
     echo App::environment();
     echo Config::get('app.url');
    });
    Route::get('/home',function(){
     dd(\Auth::user());
    });







    Route::controller('profile','ProfileController');
    // Route::controller('question','QuestionController');
    // Route::any('accounts/login/{provider?}','Auth\AuthController@handle_login');
    // Route::controller('account','AccountController');
    // Route::get('logout','AccountController@getLogout');
    // Route::group(['middleware' => ['web']], function () {
    //     Route::controller('dashboard','DashboardController');
    //
    //     Route::get('session',function(){
    //       return Session::get('user');
    //     });
    //
    //
    //
    // });


});
Route::controller('document','DocumentController');
Route::controller('avatar','AvatarController');

Route::group(['middleware' => 'web'], function () {
    //Route::auth();

    //Route::get('/home', 'HomeController@index');
});
