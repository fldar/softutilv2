<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contato extends Model
{

  use SoftDeletes;

  protected $fillable = [
   'descricao',
   'conteudo'
];

protected $table = 'contatos';
protected $dates = ['deleted_at'];


}
