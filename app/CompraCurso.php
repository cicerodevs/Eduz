<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraCurso extends Model
{
    protected $fillable = [
      'curso_id','user_id','status','codigo','pgto_forma'
  ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
     public function curso()
    {
        return $this->belongsTo(Curso::class);
    }


}
