@extends('layout.index')

@section('titulo','Resultado da pesquisa')

@section('conteudo')

	@if($res_bus< 1)

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Not Found!</h1>
      <p class="lead">{{$msg}}</p>
    </div>
  </div>
  @else
   <section id="lista">
        <div class="container-fluid">
          <h1 class="h2 text-center mt-5"style="font-weight: 300" >Resultado da busca!</strong></h1>
          <hr style="max-width: 10%; border:1px solid red;">
          <div class="row mt-5 justify-content-center">
            @foreach($pesquisa as $result)
              <div class="card col-lg-2 p-0">
              <img  class="card-img-cap" src="{{asset($result->imagem)}}" alt="Card image cap" style="width: 100%; height: 140px!important;">
              <div class="card-body">
              <a href="{{ route('curso.detalhes', $result->id)}}" style="color: #000;"><h5 class="" style="font-weight: 400; font-size: 17px;">{{$result->titulo}}</h5></a>
                <p class="mt-3 text-justify" style="font-weight: 300; font-size: 13px;">{{$result->autor}}</p>
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
                <p><strong>R${{$result->valor}}</strong></p>
              </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
  @endif
	
		
@endsection