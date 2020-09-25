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
    return view('index');
});

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');

Route::get('berelheto-szemelyautok-autokolcsonzes')->name('szemelyautok');

Route::get('berelheto-kisbuszok-kisbuszkolcsonzes')->name('kisbuszok');


Route::get('a-bereljolcsonautot-autoberles-feltetelei','HomeController@berlesfeltetelek')->name('berlesfeltetelek');

Route::get('autoberles-foglalas')->name('foglalas');

Route::get('elerhetoseg')->name('elerhetoseg');
