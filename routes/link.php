<?php

Route::get('/links',['as'=>'links','uses'=>'LinkController@index']);

Route::group(['middleware' => 'auth'],function(){
  Route::post('/links/salvar',['as'=>'links.salvar','uses'=>'LinkController@salvar']);
  Route::delete('/links/deletar/{id}',['as'=>'links.deletar','uses'=>'LinkController@deletar']);
});
