@extends('layout.index')

@section('titulo','Detalhes do curso')

@section('conteudo')

	@if($tot<1)
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  <strong>{{$msg_err}}</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<meta http-equiv="refresh" content=2;url="{{url('/home')}}">
	@else
	<hr>
	 <section id="lista">
        <div class="container-fluid">
          <h1 class="h2 text-center mt-5"style="font-weight: 300" >Meus Cursos!</strong></h1>
          <hr style="max-width: 10%; border:1px solid orange;">
          <div class="row mt-5 justify-content-center">
              <div class="card col-lg-2 col-10 col-md-6 p-0">
              <img  class="card-img-cap" src="{{asset($imagem)}}" alt="Card image cap" style="width: 100%; min-height: 140px!important;">
              <div class="card-body">
              <a href="{{ route('curso.detalhes', $dados->id)}}" style="color: #000;"><h5 class="" style="font-weight: 400; font-size: 17px;">{{$titulo}}</h5></a>
                <p class="mt-3 text-justify" style="font-weight: 300; font-size: 13px;">{{$autor}}</p>
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
              </div>
            </div>
  
          </div>
        </div>
      </section>

	@endif
		
		
		

		
@endsection