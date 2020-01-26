<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curso;
use App\Info;
use App\User;
use App\CompraCurso;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Auth;



class CursoController extends Controller
{
    public function detalhes($id)
    {
    	$cursos = Curso::find($id); 
        $info = $cursos->curso_infos()->get();
        
        return view('curso.detalhes', compact('cursos', 'info'));

    } 
     public function meus_cursos()
    {
        $cursos = Curso::all();

        $resultado = User::find(Auth::user()->id)->compras()->get();
        $msg_err = "Você ainda não possui nenhum curso!";
        
        $tot = $resultado->count('id');
        /*
        $cursos_comp = DB::table('cursos')
            ->leftJoin('compra_cursos', 'user_id', '=', 'compra_cursos.user_id')
            ->get();
        */
        $curso = DB::table('cursos')
        ->join('compra_cursos', function ($join) {
            $join->on('user_id', '=', 'compra_cursos.user_id')
                 ->where('compra_cursos.user_id', '=', Auth::user()->id);
        })
        ->get();
        //echo $curso;
        foreach ($curso as $list) {
           $titulo = $list->titulo;
           $imagem = $list->imagem;
           $autor = $list->autor;     
        }
        foreach ($cursos as $dados ) {
           
        }
        
        

        return view('curso.meus_cursos', compact('dados', 'msg_err','tot', 'titulo','imagem', 'autor'));
    }

     public function categorias($categoria)
    {
    	$cursos = \DB::table('cursos')->where('categoria')->where('categoria','=','?');
    	return view('curso.categoria', compact('cursos'));
    }
    public function mobile()
    {
        $cursos = \DB::table('cursos')->where('categoria','=','Mobile')->get();
        //$cursos = Curso::all();
        
        return view('curso.mobile', compact('cursos'));
    }
    public function web()
    {
        $cursos = \DB::table('cursos')->where('categoria','=','Web')->get();
        return view('curso.web', compact('cursos'));
    } 
    public function design()
    {
        $cursos = \DB::table('cursos')->where('categoria','=','Design')->get();
        return view('curso.design', compact('cursos'));
    }
    public function busca()
    {
        $busca = Input::get('buscar');
        $pesquisa = Curso::where('titulo', 'like', '%'.$busca.'%')
        ->orWhere('descricao', 'like', '%'.$busca.'%')
        ->orderBy('id')
        ->paginate(10);

        $res_bus = $pesquisa->count('id');
        $msg = "Nenhum curso encontrado para sua busca";
        return view('curso.busca', compact('pesquisa', 'res_bus', 'msg'));
    }
   
}
