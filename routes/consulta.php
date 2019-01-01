<?php

Route::get('/consultas',['as'=>'consultas','uses'=>'ConsultaController@index']);

Route::group(['middleware' => 'auth'],function(){
  Route::post('/consulta/salvar',['as'=>'consulta.salvar','uses'=>'ConsultaController@salvar']);
  Route::delete('/consulta/deletar/{id}',['as'=>'consultas.deletar','uses'=>'ConsultaController@deletar']);
});
