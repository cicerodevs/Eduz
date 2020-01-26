<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Info;
use App\User;

class CursoController extends Controller
{
    public function index()
    {
      $registros = Curso::all();
      $cursos = \DB::table('cursos')->select('id','alunos_insc', 'valor')->get(); 
      //buscando por um registro
      $curso_id = \DB::table('cursos')->where('id')->select('alunos_insc', 'valor')->get();
      
      //buscando a quantidade de cursos registrados
      $total_cursos = $cursos->count('id');
      
      //buscando a quantidade de alunos inscritos
      $alunos = $cursos->sum('alunos_insc');

      //buscando os ganhos por curso x alunos inscritos
      $preco = $curso_id->sum('alunos_insc')*$curso_id->sum('valor');

      $valor_total = Curso::all()->sum(function($vt){ 
          return $vt->alunos_insc * $vt->valor; 
      });
      // Busca pelos dados do administrador
      $adms = \DB::table('users')->where('id','1')->get();
      

      return view('admin.cursos.index',compact('registros','alunos', 'total_cursos', 'valor_total', 'adms'));
    }
    public function adicionar()
    {
      return view('admin.cursos.adicionar');
    }
    public function salvar(Request $req)
    {
      $dados = $req->all();

      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'nao';
      }

      if($req->hasFile('imagem')){
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "img/cursos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      } 
 
      Curso::create($dados);


      return redirect()->route('admin.cursos');

    }

    public function editar($id)
    {
      $registro = Curso::find($id);
      return view('admin.cursos.editar',compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'nao';
      }

      if($req->hasFile('imagem')){
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "img/cursos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      }

      Curso::find($id)->update($dados);

      return redirect()->route('admin.cursos');

    }

    public function deletar($id)
    {
      Curso::find($id)->delete();
      return redirect()->route('admin.cursos');
    }
}
