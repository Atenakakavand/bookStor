<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::namespace('Admin')->prefix('admin')->group(function ()
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>['auth:web','admin']],function ()
{
    Route::get('/','AdminController@index');
    Route::resource('/category','CategoryController');
    Route::resource('/book','BookController');
    Route::resource('/user','UserController');
    Route::post('/accept','CommentController@agree');
    Route::get('/comment','CommentController@show')->name('comment.show');
    Route::patch('/agree','CommentController@agree');
    Route::delete('/remove','CommentController@remove');

});

Route::namespace('User')->prefix('user')->group(function ()
{
    Route::get('/','ProfileController@index');
    Route::get('/imagePro','ImageController@imagePro');
    Route::resource('/profile','UserController');
});

Route::namespace('site')->group(function ()
{
    Route::get('/','SiteController@index');
    Route::get('/category/{menu}','SiteController@menu')->name('menu');
    Route::get('/category/{menu}/{submenu}','SiteController@submenu')->name('submenu');
    Route::get('/single/{slug}','SiteController@single');
    Route::get('refreshcaptcha', 'SiteController@refreshCaptcha');
    Route::get('pay','SiteController@pay');
    Route::get('/about','SiteController@about');
    Route::get('/imgOfLib','SiteController@imgOfLib');


});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact','ContactController@index');

Route::post('/comment','CommentController@save');

Route::get('/comment','CommentController@show');




