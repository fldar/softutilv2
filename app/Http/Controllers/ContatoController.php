<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use App\Http\Requests\ContatoRequest;

class ContatoController extends Controller
{

    public function index()
    {
      $registros_contatos = Contato::all();
      return view('contatos.contatos', compact('registros_contatos'));
    }


    public function salvar(ContatoRequest $req)
    {
       $dados = $req->all();
       Contato::create($dados);
       return redirect()->back();
    }


    public function deletar($id)
    {
      $contato = Contato::find($id);
      $contato->delete();
      return redirect()->back();
    }

}
