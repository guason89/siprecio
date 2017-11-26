<?php

Route::group(['prefix'=>'presupuesto'], function(){

	Route::get('/',['as'=>'presupuesto.tipo', 'uses'=>'PrecioController@PresupuestoInicio']);
	Route::post('/app',['as'=>'presupuesto.etapa.dos', 'uses'=>'PrecioController@PresupuestoEtapaDos']);

	Route::get('/usuarios',['as'=>'usuarios', 'uses'=>'PrecioController@Usuarios']);

	Route::get('/calificar',['as'=>'calificarSitio', 'uses'=>'PrecioController@calificarSitio']);
	Route::post('/calificarSitio',['as'=>'save.calificacion.sitio', 'uses'=>'PrecioController@saveCalificarSitio']);
});
	

?>
