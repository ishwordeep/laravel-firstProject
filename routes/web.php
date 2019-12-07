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

// Route::get('/about', function () {  //path in url : http://127.0.0.1:8000/about
//     return view('about');   //page name
// });

Route::get('/about','AboutController@index');   
//first para=path in url : http://127.0.0.1:8000/about
//second para=runs index method of AboutController 
