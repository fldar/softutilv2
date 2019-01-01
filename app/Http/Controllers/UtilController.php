<?php

namespace App\Http\Controllers;

use App\Models\Util;
use Illuminate\Http\Request;
use App\Http\Requests\UtilRequest;

class UtilController extends Controller
{

    public function index()
    {
      $registros_uteis = Util::all();
      return view('uteis.uteis', compact('registros_uteis'));
    }

     public function salvar(UtilRequest $req){
        $dados = $req->all();
        Util::create($dados);
        return redirect()->back();
      }


      public function deletar($id)
      {
        $util = Util::find($id);
        $util->delete();
        return redirect()->back();
      }

}
