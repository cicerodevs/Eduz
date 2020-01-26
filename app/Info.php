<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
      'curso_id','objetivos','requistos','file_titulo','file_name'
    ];
}
