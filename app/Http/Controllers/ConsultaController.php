<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultaRequest;

class ConsultaController extends Controller
{

    public function index()
    {
      $registros_consultas = Consulta::all();
      return view('consultas.consultas', compact('registros_consultas'));
    }

    public function salvar(ConsultaRequest $req)
    {
       $dados = $req->all();
       Consulta::create($dados);
       return redirect()->back();
    }


    public function deletar($id)
    {
      $consulta = Consulta::find($id);
      $consulta->delete();
      return redirect()->back();
    }

}
