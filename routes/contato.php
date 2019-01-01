<?php

Route::get('/contatos',['as'=>'contatos','uses'=>'ContatoController@index']);

Route::group(['middleware' => 'auth'],function(){
  Route::post('/contatos/salvar',['as'=>'contatos.salvar','uses'=>'ContatoController@salvar']);
  Route::delete('/contatos/deletar/{id}',['as'=>'contatos.deletar','uses'=>'ContatoController@deletar']);
});
