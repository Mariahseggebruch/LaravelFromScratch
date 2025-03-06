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

// Route::get('/users/{id}', function($id){
//     return 'This is user '.id;
// });
// Dynamic value / parameter 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/', 'PagesController@index');