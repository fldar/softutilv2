<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Util extends Model
{
  use SoftDeletes;

  protected $fillable = [
   'descricao',
   'conteudo'
];

protected $table = 'utils';
protected $dates = ['deleted_at'];

}
