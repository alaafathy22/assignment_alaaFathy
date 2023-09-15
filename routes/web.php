<?php

use App\Models\album;
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


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'Controller@home')->name('home');
    Route::post('create_Album', 'Controller_create_Album@create_Album')->name('create_Album');
    Route::post('create_picture', 'Controller_create_picture@create_picture')->name('create_picture');
    Route::post('edit_picture', 'Controller_edit_picture@edit_picture')->name('edit_picture');
    Route::post('move_picture', 'Controller_edit_picture@move_picture')->name('move_picture');
    Route::post('delete_Album', 'Controller_delete_Album@delete_Album')->name('delete_Album');
    Route::post('check_availability', 'Controller_check_availability@check_availability')->name('check_availability');
});
