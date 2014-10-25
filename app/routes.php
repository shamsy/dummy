<?php

/*Route::get('login', function()
{
    return View::make('auth/login');
});*/

//Tutorial
Route::any("/", [
 "as"   => "user/login",
 "uses" => "UserController@login"
]);

Route::any("/profile", [
  "as"   => "user/profile",
  "uses" => "UserController@profile"
]);