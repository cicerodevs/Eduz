<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Info;


class AddDetalhes extends Controller
{
     public function adddetalhes($id)
    {
    	$registro = Curso::find($id); 
        
        return view('admin.cursos.detalhes', compact('registro'));

    } 
     public function salvar_det(Request $req)
    {
      $dados = $req->all();

      if($req->hasFile('file_name')){
        $file_name = $req->file('file_name');
        $num = rand(1111,9999);
        $dir = "arquivo/cursos/";
        $ex = $file_name->guessClientExtension();
        $nomeArquivo = "arquivo_".$num.".".$ex;
        $file_name->move($dir,$nomeArquivo);
        $dados['file_name'] = $dir."/".$nomeArquivo;
      } 
 
      Info::create($dados);


      return redirect()->route('admin.cursos');

    }
}
