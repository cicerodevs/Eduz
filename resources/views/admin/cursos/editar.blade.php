@extends('layout_adm.adm')

@section('titulo','Edição de curso')

@section('conteudo')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">
    <h3 class="center">Editando Curso</h3>
    <div class="row">
      <form class="" action="{{route('admin.cursos.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.cursos._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </main>




@endsection
