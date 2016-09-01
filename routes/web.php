<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/admin', function () {
    return view('pages.admin.index');
});

/*
 * Admin panel - manage categories.
 */
Route::group(['prefix' => '/admin/categories'], function () {

    Route::get('/', [
        'uses' => 'AdminCategoriesController@categories'
    ]);

    Route::get('/create', [
        'uses' => 'AdminCategoriesController@create'
    ]);

    Route::post('/create', [
        'uses' => 'AdminCategoriesController@store'
    ]);

    Route::get('/edit/{id}', [
        'uses' => 'AdminCategoriesController@edit'
    ]);

    Route::post('/edit/{id}', [
        'uses' => 'AdminCategoriesController@update'
    ]);

    Route::get('/delete/{id}', [
        'uses' => 'AdminCategoriesController@delete'
    ]);

});


