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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::get('/Vender', 'UsuarioController@publicarform')->name('publicar_form')->middleware(['auth']);
Route::post('/Vender', 'UsuarioController@publicar')->name('publicar');
Route::get('/FAQ', 'HomeController@faq')->name('faq');
Route::get('/producto/{id}', 'ProductosController@info')->name('producto');
Route::delete('/producto/{id}', 'ProductosController@eliminar')->name('eliminar_publicacion');
Route::get('/producto/{id}/editar', 'ProductosController@editarForm')->name('editar_form');
Route::put('/producto/{id}/editar', 'ProductosController@editar')->name('editar_producto');
Route::get('/resultados', 'BusquedasController@buscar')->name('buscar');
Route::get('/perfil', 'UsuarioController@perfil')->name('perfil');
Route::get('/perfil/favoritos', 'UsuarioController@perfil')->name('favoritos');
Route::get('/perfil/publicaciones', 'UsuarioController@publicaciones')->name('publicaciones');
Route::get('/perfil/configuracion', 'UsuarioController@config')->name('configuracion');
Route::get('/categorias', 'BusquedasController@categorias')->name('categorias');
Route::get('/categoria/{id}', 'BusquedasController@categoria')->name('categoria');
Route::get('/terms', 'HomeController@terms')->name('terms');
Auth::routes();
