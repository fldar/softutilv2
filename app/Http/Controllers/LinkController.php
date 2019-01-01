<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Requests\LinkRequest;

class LinkController extends Controller
{

    public function index()
    {
        $registro_link = Link::all();
        return view('links.links', compact('registro_link'));
    }


     public function salvar(LinkRequest $req)
     {
       $dados = $req->all();
       Link::create($dados);
       return redirect()->route('links');
     }



     public function deletar($id)
     {
      $link = Link::find($id);
      $link->delete();
      return redirect()->back();
     }


}
