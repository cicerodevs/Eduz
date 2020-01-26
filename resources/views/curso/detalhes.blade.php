@extends('layout.index')

@section('titulo','Detalhes do curso')

@section('conteudo')

	<section id="curso" class="mt-5" style="background-color: #4e6967;background:linear-gradient(#29303B,#29303B,#29303B);
    color: #fff;">
    <div class="container p-5">
      <div class="curso-titulo p-4">
          <h2>{{$cursos->titulo}}</h2>
          <h3 class="col-lg-9 h5" style="margin-left: -15px; font-weight: 300;">{{$cursos->slug}}</h3>
          <p style="font-weight: 300;">Criado por: <span>{{$cursos->autor}}</span></p>
          <p style="font-weight: 300;"><i class="fa fa-language"></i>: {{$cursos->idioma}}  <span class="ml-lg-5">{{$cursos->alunos_insc}} alunos inscritos</span></p>
          <a href="{{route('checkout', $cursos->id)}}"><button class="btn btn-success">Compre agora</button></a>
      </div>
      <!-- Video -->

    </div>
  </section>
  <section id="sobre">
  	<div class="container">
  		<div class="p-5">
  			<h2 class="" style="font-weight: 300;">Informações sobre o curso</h2>
  			<p class="col-lg-9 mt-5" style="font-size: 18px; margin-left: -17px;">{{$cursos->descricao}}</p>
  		</div>
  	</div>
  </section>
  <section id="expectativa" class="mb-5">
  	<div class="container">
  		<div class="row" style="background-color: #f7f7f7; border: 1px solid #ddd;">
        <div class="ml-5 p-4 col-lg-5">
          <h2 class="mb-3" style="font-weight: 300; ">O que irei aprender?</h2>
          @foreach($info as $val)
          <ul class="list-inline">
           <li class="list-inline mt-2"><i class="fa fa-check "></i> {{$val->objetivos}}</li>
          </ul>
          @endforeach
        </div>     
        <div class="ml-5 p-4 col-lg-5">
          <h2 class="mb-3" style="font-weight: 300;">Pré requisitos</h2>
          @foreach($info as $val)
          <ul class="list-inline">
           <li class="list-inline mt-2"><i class="fa fa-check "></i> {{$val->requistos}}</li>
          </ul>
          @endforeach
        </div>  
      </div><!-- /row -->
  	</div><!-- /Container -->
  </section>
  <section id="conteudo">
  	<div class="container">
  		<div class="mt-5
  		 mb-5 ml-5">
  		<h2 class="mt-5 mb-3" style="font-weight: 300;">Conteúdo do curso</h2>
      <!--
  		<a href=""><img src="{{asset($cursos->imagem)}}"></a><br><br>
  		<a href="download/{{$cursos->file_name}}" download="{{$cursos->file_name}}"><button class="btn btn-success">Baixar</button></a>
      -->
      @foreach($info as $val)
      <ul class="list-inline">
         <a href="" title="{{$val->file_titulo}}"><li class="list-inline mt-2">{{$val->file_titulo}}</li></a>
      </ul>
      @endforeach
  		</div>
  	</div>
  </section>
@endsection
