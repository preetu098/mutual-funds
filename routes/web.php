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

Route::get('/test',function(){
    dd("ok");
});
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

Route::get('/sipcalculator',function(){
    return view('sipcalculator');
});

Route::get('/register',function(){
    return view('register');
});


Route::get('/pms',function(){
    return view('pms');
});

Route::get('/homeloan',function(){
    return view('homeloan');
});

Route::get('/verifypart2',function(){
    return view('verifypart2');
});

Route::get('/verifypart3',function(){
    return view('verifypart3');
});

Route::get('/terminsurance',function(){
    return view('terminsurance');
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

Route::get('/loan',function(){
    return view('loan');
});

Route::get('/creditcards',function(){
    return view('creditcards');
});

Route::get('/sbi',function(){
    return view('sbi');
});
Route::get('/hdfc',function(){
    return view('hdfc');
});
Route::get('/icici',function(){
    return view('icici');
});
Route::get('/standardcharted',function(){
    return view('standardcharted');
});

Route::get('/insurance',function(){
    return view('insurance');
});