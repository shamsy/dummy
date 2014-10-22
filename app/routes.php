<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('hello');
});

/*
 * Authentication form
 */
Route::get('login', function()
{
    return View::make('auth/login');
});

Route::get('forgot_password', function()
{
    return View::make('auth/forgot_password');
});

<<<<<<< HEAD
Route::get('password_reset', function()
{
    return View::make('auth/password_reset');
});

/*
 * Validate The Submitted CSRF Token
 */
Route::post('register', array('before' => 'csrf', function()
{
    return 'You gave a valid CSRF token!';
}));


//change for fix purpose

