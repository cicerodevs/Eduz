<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected $fillable = [
      'categoria','titulo','slug','descricao','valor','imagem','publicado','autor','alunos_insc','idioma','file_title','file_name'
  ];

  public function curso_infos()
  {
  	return $this->hasMany(Info::class);
  }
  public function compra_cursos()
  {
    return $this->hasMany(CompraCurso::class);
  }



}
