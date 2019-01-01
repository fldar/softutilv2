<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
  use SoftDeletes;

  protected $fillable = [
     'site',
     'link'
   ];

protected $table = 'links';
protected $dates = ['deleted_at'];

}
