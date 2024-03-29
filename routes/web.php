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

Route::get('home','AdminController@home')->middleware('verified')->name('home');
Route::get('loggingout','AdminController@adminlogout')->middleware('verified')->name('logout');

Route::get('/index', 'HomeController@index')->name('index');

Route::get('berelheto-szemelyautok-autokolcsonzes','HomeController@szemelyAutok')->name('szemelyautok');

Route::get('berelheto-kisbuszok-kisbuszkolcsonzes')->name('kisbuszok');

Route::get('autoberles/bejegyzesek/{slug}','HomeController@show_bejegyzes')->name('Bejegyzes.FrontEnd');

Route::get('a-bereljolcsonautot-autoberles-feltetelei','HomeController@berlesfeltetelek')->name('berlesfeltetelek');

Route::get('autoberles-foglalas','HomeController@FoglalasiUrlap')->name('foglalas');

Route::post('autoberles-kolcsonzes-urlap','HomeController@UrlapFeldolgozo');

Route::get('elerhetoseg','HomeController@kapcsolat')->name('elerhetoseg');

Route::get('hirek','HomeController@hirek')->name('hirek');

Route::get('admin/ujautofelvitele','AdminController@ujautofelvitele')->middleware('verified');
Route::post('admin/ujautofelvitele_feldolgozo','AdminController@uj_auto_feldolgozo')->middleware('verified');
Route::post('admin/auto/torles/post','AdminController@auto_torles')->middleware('verified')->name('Auto.Torles');

Route::get('admin/foglalasok','AdminController@foglalasok')->middleware('verified')->name('foglalas.lista');
Route::get('admin/foglalas/{id}','AdminController@show_foglalas')->middleware('verified')->name('foglalas.show');

Route::get('admin/autok/lista','AdminController@autokszerkesztese')->middleware('verified');

Route::get('admin/automodositasa/{AutoID}','AdminController@autoszerkesztes')->middleware('verified')->name('Auto.Modositas');
Route::post('admin/automodositasa_feldolgozo','AdminController@automodosito_feldolgozo')->middleware('verified')->name('Auto.Modositas.Post');

Route::get('admin/bejegyzesek','AdminController@bejegyzesek')->middleware('verified')->name('bejegyzes.lista');
Route::get('admin/bejegyzes/letrehozas','AdminController@bejegyzes_letrehozas')->middleware('verified')->name('bejegyzes.letrehozas');
Route::post('admin/bejegyzes/letrehozas/post','AdminController@bejegyzes_letrehozas_post')->middleware('verified')->name('bejegyzes.letrehozas.post');

Route::get('admin/bejegyzes/szerkesztes/{id}','AdminController@bejegyzes_szerkesztes')->middleware('verified')->name('bejegyzes.szerkesztes');
Route::post('admin/bejegyzes/szerkesztes/post','AdminController@bejegyzes_szerkesztes_post')->middleware('verified')->name('bejegyzes.szerkesztes.post');


Route::get('admin/oldalak','AdminController@oldalak')->middleware('verified')->name('oldal.lista');
Route::get('admin/oldal/szerkesztes/{OldalID}','AdminController@oldalSzerkesztes')->middleware('verified')->name('oldal.szerkesztes');
Route::post('admin/oldal/modositas/post','AdminController@oldalSzerkesztesFeldolgozo')->middleware('verified')->name('oldal.modositas.post');

Route::get('admin/foglalas/torles/{foglalasID}','AdminController@foglalas_torlese')->middleware('verified')->name('Foglalas.Torles');

Route::get('sikeres-foglalas','HomeController@thanx')->name('koszonjuk');
