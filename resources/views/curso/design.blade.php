@extends('layout.index')

@section('titulo','Design & UX | Eduz sua plataforma de cursos online')

@section('conteudo')
    <main role="main">
      <section id="curso" class="mt-5" style="background-color: red;">
        <div class="container">
          <div class="curso-titulo p-4">
            <h1><span style="font-size: 22px; font-weight: 300;">Cursos de <br></span>Design & UX</h1>
            <p class="col-lg-9 pt-4" style="margin-left: -15px;">Crie aplicativos móveis para as principais plataformas. Aprenda Android e iOS nativo ou frameworks multiplataforma como Cordova, React Native e Xamarim. Desenvolva também jogos mobile com Unity.</p>
          </div>
        </div>
      </section>

      <section id="lista">
        <div class="container-fluid">
          <h1 class="h2 text-center mt-5 " style="font-weight: 300">Seja um desenvolvedor <strong>Design & UX!</strong></h1>
          <hr style="max-width: 10%; border:1px solid red;">
          <div class="row mt-5 justify-content-center">
            @foreach($cursos as $curso)
              <div class="card col-lg-2 p-0">
              <img  class="card-img-cap" src="{{asset($curso->imagem)}}" alt="Card image cap" style="width: 100%; height: 140px!important;">
              <div class="card-body">
              <a href="{{ route('curso.detalhes', $curso->id)}}" style="color: #000;"><h5 class="" style="font-weight: 400; font-size: 17px;">{{$curso->titulo}}</h5></a>
                <p class="mt-3 text-justify" style="font-weight: 300; font-size: 13px;">Ruan Gonzalez Feryts</p>
               <div class="estrelas">
                <input type="radio" id="vazio" name="estrela" value="" checked>
                
                <label for="estrela_um"><i class="fa"></i></label>
                <input type="radio" id="estrela_um" name="estrela" value="1">
                
                <label for="estrela_dois"><i class="fa"></i></label>
                <input type="radio" id="estrela_dois" name="estrela" value="2">
                
                <label for="estrela_tres"><i class="fa"></i></label>
                <input type="radio" id="estrela_tres" name="estrela" value="3">
                
                <label for="estrela_quatro"><i class="fa"></i></label>
                <input type="radio" id="estrela_quatro" name="estrela" value="4">
                
                <label for="estrela_cinco"><i class="fa"></i></label>
                <input type="radio" id="estrela_cinco" name="estrela" value="5"><span style="float: right;"><strong>4.8</strong>(100)</span>    
              </div>
              <!--Fim clasificação por estrelas-->
              <div class="mt-2" style="float: right;">
                <p><strong>R${{$curso->valor}}</strong></p>
              </div>
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