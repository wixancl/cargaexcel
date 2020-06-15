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

/************************************/
/*         MANTENEDORES             */
/************************************/
//CAMBIA VISTA LOGIN COMO INICIO DE SITIO
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

//RUTAS DE USUARIO LARAVEL
Auth::routes();

//CARGA DE DATOS 
Route::get('carga', 'CargaController@index'); 

//RUTA DE VISTA, UNA VEZ QUE SE ESTA LOGUEADO
Route::get('/home', 'HomeController@index');

//RUTAS ADMINISTRACION DE USUARIOS
Route::resource('users','UsersController');

//RUTA PARA EL CAMBIO DE PASSWORD
Route::get('users/password/cambiar', 'PasswordUsersController@password');
Route::post('users/password/cambiar', 'PasswordUsersController@save');

//RUTAS ASIGNAR ROLES
Route::get('users/asignRole/{user}', 'UsersController@asignRole');
Route::post('users/saveRole', 'UsersController@saveRole');

//RUTAS ASIGNAR ESTABLECIMIENTOS
Route::get('users/asignEstab/{user}', 'UsersController@asignEstab');
Route::post('users/saveEstab', 'UsersController@saveEstab');

//RUTA LOGIN AJAX
Route::get('getEstab/{mail}','Auth\LoginController@getEstab');

//VERIFICA SI DOCUMENTO EXISTE EN INGRESO OFICINA DE PARTES
Route::get('getDocumento/{proveedor}/{n_doc}/{tipo}','DocumentosController@docExiste'); 

//RUTA CUADRO RESUMEN
Route::get('cuadroresumen', 'CuadroResumenController@CuadroResumen'); /* <--------------------- */

//CARGA DE DATOS 
// Route::get('carga', 'CargaController@Carga'); /* <--------------------- */
//Route::post('carga/uploadCarga','CargaController@uploadCarga')->middleware('carga');/* <--------------------- */
