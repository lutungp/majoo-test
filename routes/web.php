<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('home');
});

Auth::routes();



Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['prefix' => 'master', 'namespace' => 'Master'], function () {

        Route::name('master.')->group(function () {
            Route::prefix('products')->name('products.')->group(function () {
                Route::get('/', 'ProductsController@index')->name('index');
                Route::get('/list', 'ProductsController@index')->name('list');
            }); 
        });

    });
});
