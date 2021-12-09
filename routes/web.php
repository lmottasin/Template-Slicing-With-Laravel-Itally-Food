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

Route::group(['namespace'=>'App\Http\Controllers'],function (){
    Route::get('/','HomepageController@showHomePage')->name('home.show');
    Route::get('/staff','HomepageController@showStaffPage')->name('staff.show');
    Route::get('/menu','HomepageController@showMenuPage')->name('menu.show');
    Route::get('/blog','HomepageController@showBlogPage')->name('blog.show');
});

