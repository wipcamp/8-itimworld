<?php

//Route::get('/upload', 'AdminDocumentController@index');
//Route::get('/upload/show', 'AdminDocumentController@show');

Route::controller('itim', 'RegisterController');

Route::get('hash',function(){
  $password = Hash::make(123);
  $pass = bcrypt(123);
  if (Hash::check('secret', $hashedPassword))
  {
      return "correct";
  }
});
