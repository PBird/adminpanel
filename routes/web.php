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




Route::get('/', 'SiteController@index');


Route::prefix('/panel')->group(function () {

    Route::get('/',function(){

    return view('panel.pages.index');
    })->middleware('auth');

    Route::prefix('/page')->group(function () {

        Route::get('create','PageController@create')->name('page.create');
        Route::get('Pagecreate','PageController@Pagecreate')->name('page.Pagecreate');
        Route::post('store','PageController@store')->name('page.store');
        Route::get('index','PageController@index')->name('page.index');
        Route::get('{page}/edit','PageController@edit')->name('page.edit');
        Route::get('{page}/delete','PageController@destroy')->name('page.delete');
        Route::post('{page}/update','PageController@update')->name('page.update');

    });


    Route::prefix('/customize')->group(function () {

    Route::get('{page}','PageController@customize')->name('customize');


    });

    Route::prefix('/navigations')->group(function () {

    Route::get('/','NavController@index')->name('navs.show');
    Route::get('{nav}/edit','NavController@edit')->name('nav.edit');
    Route::post('{nav}/update','NavController@update')->name('nav.update');
    Route::get('/create','NavController@create')->name('nav.create');
    Route::post('/create','NavController@store')->name('nav.store');
    Route::get('{nav}/delete','NavController@destroy')->name('nav.delete');

    });
     Route::prefix('/media')->group(function () {

        Route::get('/','ImageController@index')->name('image.show');
        Route::get('/uploadpage','ImageController@create')->name('image.upload');
        Route::post('/upload','ImageController@store')->name('image.store');
        Route::get('/{image}/delete','ImageController@destroy')->name('image.destroy');

    });






 });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
