<?php
Route::controller('itim', 'RegisterController');



//Route::get('mail/{wip_id}/{verify}','AccountController@VerifySecond');
Route::group(['middleware' => ['web']], function () {
    Route::controller('auth','Auth\AuthController');
    Route::get('account/{wip_id}/{verify_code}','AccountController@getVerify');
    Route::controller('account','AccountController');





    Route::group(['middleware' => ['web','acl']], function () {
        Route::controller('profile','ProfileController');
        Route::controller('question','QuestionController');
    });






    //social login
    //Route::get('/facebook/connect', 'Auth/connect')










    Route::get('/',function(){
        return redirect('/profile');
    });
    Route::get('/home',function(){
     dd(\Auth::user());
    });







    //Route::controller('profile','ProfileController');
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
