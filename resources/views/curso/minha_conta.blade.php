@extends('layout.index')

@section('titulo','Minha conta')

@section('conteudo')

<style type="text/css">
	.form-control{
		height: 50px;
	}
	.form-control:focus{
		box-shadow: none;
		border-color: red;
	}
</style>

<section id="minha_conta" class="mt-5 mb-5">
	<div class="container">
		<div class="row justify-content-center">
			<aside style="border: 1px solid #ccc;" class="">
				<div class="p-5">
					<div align="center" class="mb-3">
						<img width="100" height="100" src="{{asset('bootstrap-solid.svg')}}" style="border-radius: 50%;">
					</div>
					<p class="text-center"><strong>{{Auth::user()->nome. ' '. Auth::user()->sobrenome}}</strong></p>
				</div>
				<div class="list-group ">
				  <a href="#" class="list-group-item list-group-item-action active">
				    Perfil
				  </a>
				  
				</div>
			</aside>
			<article style="border: 1px solid #ccc;" class=" col-8" >
				<h5 class="text-center pt-4">Perfil</h5>
				<p class="text-center">Adicione informações sobre você</p>
				<hr >
				<p class="text-center">Dados básicos:</p>
				<div align="center">
					<form class="form-group" method="post">
						<div class="col-lg-8">
							<input type="text" class="form-control mb-4" name="nome" value="{{Auth::user()->nome}}">
							<input type="text" class="form-control mb-4" name="nome" value="{{Auth::user()->sobrenome}}">
							<input type="email" class="form-control mb-4" name="nome" value="{{Auth::user()->email}}">
							<input type="tel" class="form-control mb-4" name="nome" value="{{Auth::user()->telefone}}">
						</div>
						<hr>
						<p>Dados adicionais:</p>
						<div class="col-lg-8">
							<input type="text" class="form-control mb-4" name="nome" placeholder="CPF">
							<input type="text" class="form-control mb-4" name="nome" placeholder="Endereco">
						</div>
						<button class="btn" style="background-color:red; color: #fff;">Salvar</button>
					</form>

				</div>
			</article>

		</div><!-- /row -->
	</div><!-- /container -->
</section>

@endsection