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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/Vender', 'UsuarioController@publicarform')->name('publicarform')->middleware(['auth']);
Route::post('/Vender', 'UsuarioController@publicar')->name('publicar');
Route::get('/FAQ', 'HomeController@faq')->name('faq');
Route::get('/producto/{id}', 'BusquedasController@info')->name('producto');
Route::get('/ResultadoDeLaBusqueda/{buscar}', 'BusquedasController@buscar')->name('buscar');
Route::get('/perfil', 'UsuarioController@perfil')->name('perfil');
Route::get('/perfil/favoritos', 'UsuarioController@fav')->name('favoritos');
Route::get('/categorias', 'BusquedasController@categorias')->name('categorias');
Route::get('/terms', 'HomeController@terms')->name('terms');

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
