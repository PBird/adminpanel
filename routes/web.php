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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panel',function(){

    return view('panel.pages.index');
});


Route::prefix('/panel')->group(function () {

    Route::get('/',function(){

    return view('panel.pages.index');
    });

    Route::prefix('/page')->group(function () {

        Route::get('create','PageController@create')->name('page.create');
        Route::get('Pagecreate','PageController@Pagecreate')->name('page.Pagecreate');
        Route::post('store','PageController@store')->name('page.store');


    });





 });


