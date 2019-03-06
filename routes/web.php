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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get ('/',[
    'uses'=> 'frontend\HomeController@index',
    'as'=>'/'
]);



Route::get ('about',[
    'uses'=> 'frontend\HomeController@about',
    'as'=>'about'
]);

Route::get ('solutions',[
    'uses'=> 'frontend\HomeController@solutions',
    'as'=>'solutions'
]);

Route::get ('careers',[
    'uses'=> 'frontend\HomeController@careers',
    'as'=>'careers'
]);

Route::get ('contacts',[
    'uses'=> 'frontend\HomeController@contacts',
    'as'=>'contacts'
]);

Route::get ('news',[
    'uses'=> 'frontend\HomeController@news',
    'as'=>'news'
]);

Route::get ('privacy-policy',[
    'uses'=> 'frontend\HomeController@privacy_policy',
    'as'=>'privacy-policy'
]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
    
});


Route::group(['middleware' =>'auth' , 'namespace' => 'backend'], function(){
    Route::resource('slider','SliderController');
});
