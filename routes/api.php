<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('proveedor/mostrar','proveedorController@show');
Route::post('proveedor/guardar','proveedorController@insert');
Route::post('productosPorCategoria/{categoria}','productoController@mostrarProductosPorCategoria');

Route::post('productosDeManaco/{proveedor}','productoController@mostrarProductosManaco');
Route::get('clienteCiudad/mostrar','clienteController@listarClientesPorCiudad');
Route::post('cantidad/cliente/ciudad/{ciudad}','clienteController@mostrarCantClienteCiudad');
Route::get('cliente/casero','clienteController@clienteCasero');
