<?php




Route::get('/', function () {
    return view('auth/login');
});


Route::auth();

Route::get('/home', 'HomeController@index');

//Route::resource('seguridad/usuario','UsuarioController');

Route::group(['middleware' => 'usuarioAdmin'], function () {
	Route::resource('seguridad/usuario','UsuarioController');

	//Route::resource('clinica','IndiceController');
	#Route::resource('seguridad','IndiceController@index2');

};