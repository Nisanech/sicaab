<?php

use Illuminate\Support\Facades\Route;
use sicaab\Http\Controllers\MessagesController;

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
Route::get('/dashboard')->name('dashboard');


Route::middleware(['auth'])->group(function(){
    
    // Inicio rutas módulo administrador

    Route::resource('administrador/roles', 'RolController');
    Route::resource('administrador/usuarios', 'UserController');
    
    // Fin rutas módulo administrador

    // Inicio rutas módulo comercial

    Route::resource('comercial/artes','ArteProductoController');
    Route::resource('comercial/cliente','ClienteController');
    Route::resource('comercial/estado_pedidos','EstadoPedidoController');
    Route::resource('comercial/orden_compra','OrdenCompraController');
    Route::resource('comercial/orden_pago','OrdenPagoController');
    Route::resource('comercial/productos','ProductoController');
    Route::resource('comercial/proveedores','ProveedorController');

    // Fin rutas módulo comercial

    // Inicio rutas módulo almacén y logística

    Route::resource('almacen/materiales', 'MaterialController');
    Route::resource('almacen/remisiones', 'RemisionController');
    Route::resource('almacen/requerimiento_compra', 'RequerimientoCompraController');

    // Fin rutas módulo almacén y logística

    // Inicio rutas módulo producción

    Route::resource('produccion/certificado_calidad', 'CertificadoCalidadController');
    Route::resource('produccion/ficha_tecnica', 'FichaTecnicaController');
    Route::resource('produccion/orden_produccion', 'OrdenProduccionCalidadController');
    Route::resource('produccion/planeacion', 'PlaneacionController');

    // Fin rutas módulo producción
    
    //rutas correo
    Route::view('/contact', 'contact/contact')->name('contact');
    Route::post('contact', [MessagesController::class, 'store']);
});





