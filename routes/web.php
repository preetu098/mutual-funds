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
    return view('welcome');
});



Route::get('/trial', function () {
    return view('trail');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/preipo',function(){
    return view('preipo');
});

Route::get('/bonds',function(){
    return view('bonds');
});

Route::get('/pms',function(){
    return view('pms');
});

Route::get('/homeloan',function(){
    return view('homeloan');
});

Route::get('/businessloan',function(){
    return view('businessloan');
});

Route::get('/carloan',function(){
    return view('carloan');
});

Route::get('/searchCompany',function(){
    return view('searchcompany');
});

Route::get('/fd',function(){
    return view('fd');
});

Route::get('loan/',function(){
    return view('loan');
});



