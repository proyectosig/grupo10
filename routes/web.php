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
Route::get('logout', 'Auth\LoginController@logout');
# panel de usuario admin
   Route::get('seguridad','IndiceController@index2');
    Route::resource('seguridad/usuario','UsuarioController');
	
   Route::patch('/user/{id}',[
    'as' => 'seguridad.usuario.update',
    'uses' => 'UsuarioController@update'
]);

#panel de usuario estrategico
Route::get('estrategico','IndiceController@index3');
   # Route::resource('estrategico','UsuarioController');

    

#panel para usuario tactico
Route::get('tactico','IndiceController@index');


#reportes estrategicos

Route::get('generate-pdf','EstTransPersonaJuridicaController@generatePDF');
Route::get('generate1-pdf','DirectMayorTransaccionController@generatePDF');
Route::get('generate2-pdf','MontoMayor5715Controller@generatePDF');
Route::get('generate3-pdf','SocioAhorroMenorMilController@generatePDF');
Route::get('generate4-pdf','SocioSaldoDeudorController@generatePDF');


#reportes tacticos
Route::get('reporte-pdf','tacticoController@creditoPeriodo');
Route::get('reporte1-pdf','tacticoController@estadoCreditoPeriodo');
Route::get('reporte2-pdf','tacticoController@tipoCreditoMasSolicitado');
Route::get('reporte3-pdf','tacticoController@ahorroSolicitados');
Route::get('reporte4-pdf','tacticoController@UtilidadesCredito');
Route::get('reporte5-pdf','tacticoController@numeroTransaccion');

#parametros estrategicos
Route::get('parametros1','EstTransPersonaJuridicaController@index');
Route::get('parametros2','MontoMayor5715Controller@index1');
Route::get('parametros3','DirectMayorTransaccionController@index2');
Route::get('parametros4','SocioAhorroMenorMilController@index3');
Route::get('parametros5','SocioSaldoDeudorController@index4');

#parametros tacticos
Route::get('previsualizar','tacticoController@index');
Route::get('previsualizar1','tacticoController@index1');
Route::get('previsualizar2','tacticoController@index2');
Route::get('previsualizar3','tacticoController@index3');
Route::get('previsualizar4','tacticoController@index4');
Route::get('previsualizar5','tacticoController@index5');