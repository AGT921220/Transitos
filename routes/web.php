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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//GRAFICAS
Route::post('graficas/productos', 'GraficasController@productos');

//PERFIL DE USUARIO
Route::get('/dashboard/perfil', 'UsersController@perfil')->name('ver_perfil');

//MOVIMIENTOS
Route::get('/movimientos','MovimientosController@ver_movimientos')->name('ver_movimientos');
Route::get('/movimientos/Agregar','MovimientosController@agregar_movimiento')->name('agregar_movimiento');

//MOVIMIENTOS AJAX
Route::post('/ajax/movimientos/cargar_horas','Ajax\MovimientosController@ajax_cargar_horas');





/*
//EMPLEADOS
Route::get('dashboard/empleados', 'UsersController@empleados')->name('ver_empleados');
Route::get('/dashboard/empleados/nuevo', 'UsersController@nuevo_empleado')->name('agregar_empleado');
Route::post('/dashboard/empleados/nuevo', 'UsersController@guardar_empleado')->name('guardar_empleado');

//PRODUCTOS
Route::get('dashboard/productos', 'ProductosController@index')->name('ver_productos');
Route::get('/dashboard/productos/nuevo', 'ProductosController@nuevo_producto')->name('agregar_producto');
Route::post('/dashboard/productos/nuevo', 'ProductosController@guardar_producto')->name('guardar_producto');

//FIRMA DIGITAL
Route::get('/dashboard/firma-digital', 'FirmaDigitalController@index')->name('firma_digital');
Route::get('/dashboard/firma-digital/nueva', 'FirmaDigitalController@nueva_firma')->name('firma_digital_new');
Route::post('/dashboard/firma-digital/nueva', 'FirmaDigitalController@guardar_firma_digital')->name('guardar_firma_digital');

//EXPORTAR EXCEL
Route::get('/dashboard/exportar_excel', 'ExportarExcelController@index')->name('exportar_excel');
Route::get('/dashboard/exportar_excel/users', 'ExportarExcelController@exportar_users_excel')->name('exportar_users_excel');
Route::get('/dashboard/exportar_excel/productos', 'ExportarExcelController@exportar_products_excel')->name('exportar_products_excel');


*/
