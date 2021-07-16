<?php

use App\Http\Controllers\ListController;
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

Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/list', [ListController::class, 'index'] )->name('index');
    Route::get('/search', [ListController::class, 'search'] );
    Route::get('/list/{id}', [ListController::class, 'show'] );
    // Route::post('/list', [ListController::class, 'store'] );
    // Route::put('/list/{id}', [ListController::class, 'update'] );
    // Route::delete('/list/{id}', [ListController::class, 'destroy'] );
//    Route::resource('post', 'PostController');
    Route::get('logout', 'AuthController@logout')->name('logout');
});
