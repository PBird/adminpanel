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
    });

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




 });


