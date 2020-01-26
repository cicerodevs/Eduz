@extends('layout.index')

@section('titulo','Desenvolvimento Mobile | Eduz sua plataforma de cursos online')

@section('conteudo')
    <main role="main">
      <section id="curso" class="mt-5">
        <div class="container">
          <div class="curso-titulo p-4">
            <h1><span style="font-size: 22px; font-weight: 300;">Cursos de <br></span>Mobile</h1>
            <p class="col-lg-9 pt-4" style="margin-left: -15px;">Crie aplicativos móveis para as principais plataformas. Aprenda Android e iOS nativo ou frameworks multiplataforma como Cordova, React Native e Xamarim. Desenvolva também jogos mobile com Unity.</p>
          </div>
        </div>
      </section>

      <section id="lista">
        <div class="container-fluid">
          <h1 class="h2 text-center mt-5" style="font-weight: 300">Seja um desenvolvedor <strong>Mobile!</strong></h1>
          <hr style="max-width: 10%; border:1px solid violet;">
          <div class="row mt-5 justify-content-center">
            @foreach($cursos as $curso)

              <div class="card col-lg-2 p-0">
              <a href="{{ route('curso.detalhes', $curso->id)}}" style="color: #000;">
              <img  class="card-img-cap" src="{{asset($curso->imagem)}}" alt="Card image cap" style="width: 100%; height: 140px!important;">
              <div class="card-body">
              <h5 class="" style="font-weight: 400; font-size: 17px;">{{$curso->titulo}}</h5>
                <p class="mt-3 text-justify" style="font-weight: 300; font-size: 13px;">{{$curso->autor}}</p>
               <div>
               <p>Alunos inscritos <span>({{$curso->alunos_insc}})</span></p>    
              </div>
              <!--Fim clasificação por estrelas-->
              <div class="mt-2" style="float: right;">
                <p><strong>R${{$curso->valor}}</strong></p>
              </div>
              </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>

      <section id="footer" class="mt-5">
        <footer>
          <hr>
          <p class="text-center">Desenvolvido por <strong>Cícero Sousa</strong></p>
        </footer>
      </section>
    </main>

   @endsection