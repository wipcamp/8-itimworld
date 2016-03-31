<?php
Route::controller('itim', 'RegisterController');
Route::group(['middleware' => ['web']], function () {
    Route::controller('auth','Auth\AuthController');
    Route::get('verify/{wip_id}/{verify_code}','AccountController@getVerify');
    Route::controller('account','AccountController');


    Route::group(['middleware' => ['web','acl']], function () {
        Route::controller('profile','ProfileController');
        //Route::controller('question','QuestionController');
        //Route::controller('document','DocumentController');
        //Route::controller('avatar','AvatarController');
    });






    //social login
    //Route::get('/facebook/connect', 'Auth/connect')










    Route::get('/',function(){
        return redirect('/profile');
    });
    Route::get('/home',function(){
     dd(\Auth::user());
    });






});
