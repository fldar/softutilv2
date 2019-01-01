<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulta extends Model
{
    use SoftDeletes;

    protected $fillable = [
     'descricao',
     'conteudo'
  ];

  protected $table = 'consultas';
  protected $dates = ['deleted_at'];

}
