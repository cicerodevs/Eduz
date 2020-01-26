@extends('layout_adm.adm')

@section('titulo','Edição de curso')

@section('conteudo')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">
    <h3 class="center mb-3">Adicionar conteúdo do curso</h3>
    <div class="row">
      <form class="" action="{{route('admin.cursos.salvar_det')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
		<div class="form-group">
		    <select class="form-control" name="curso_id">
		    	<option value="">--Selecione a categoria--</option>
		    	<option value="{{$registro->id}}">{{$registro->categoria}}</option>
		    </select>
		 </div>
		 <div class="form-group">
		    <input type="text" class="form-control" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo: '$registro->titulo'}}" disabled="">
		 </div>
        @include('admin.cursos._info')
        <button class="btn btn-success">Salvar</button>
      </form>
    </div>
  </main>




@endsection
