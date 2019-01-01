<?php

Route::get('/uteis',['as'=>'uteis','uses'=>'UtilController@index']);

Route::group(['middleware' => 'auth'],function(){
  Route::post('/uteis/salvar',['as'=>'uteis.salvar','uses'=>'UtilController@salvar']);
  Route::delete('/uteis/deletar/{id}',['as'=>'uteis.deletar','uses'=>'UtilController@deletar']);
});
