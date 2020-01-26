@extends('layout.index')

@section('titulo','Finalizar compra')

@section('conteudo')

<div class="container">
	<h1 class="mt-5">Obrigado pela compra!</h1>

	<p class="mt-5 mb-5">Imprima seu boleto abaixo</p>
    
    @foreach($gera_boleto as $boleto)
	<iframe src="{{$boleto}}" style="border: 0px; width: 80%; height: 80vh;" class="mb-5"></iframe>
	@endforeach
</div>

@endsection