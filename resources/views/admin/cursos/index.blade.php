@extends('layout_adm.adm')

@section('titulo','Área Administrativa | Eduz')

@section('conteudo')

@foreach($adms as $adm)
@endforeach()

 
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Painel de Controle</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">
                  <span data-feather="share"></span>
                  Compartilhar
                </button>
                <button class="btn btn-sm btn-outline-secondary">
                 <span data-feather="folder-plus"></span>
                 Exportar
                </button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Esta semana
              </button>
            </div>
          </div>
                    <!-- Content Row -->
          <div class="row">

            <!-- FATURAMENTO (MENSAL) Card -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">FATURAMENTO (TOTAL)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{  'R$ '.number_format($valor_total, 2, ',', '.') }}
                       </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- FATURAMENTO (ANUAL) Card  -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">MEUS CURSOS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        {{ $total_cursos }}
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Vendas (Mensal) Card  -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">ALUNOS</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$alunos}}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br><br>
          <canvas class="my-4 w-100" id="myChart" width="900" height="380" style="display: none;"></canvas>

          <h2>Cursos cadastrados</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id</th>
                  <th style="max-width: 70%;">Titulo</th>
                  <th>Imagem</th>
                  <th>Publicado</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                @foreach($registros as $registro)
                  <tr>
                  <td>{{ $registro->id }}</td>
                  <td>{{ $registro->titulo }}</td>
                  <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}" /></td>
                  <td>{{ $registro->publicado }}</td>
                  <td>
                    <a class="btn btn-warning" href="{{ route('admin.cursos.detalhes', $registro->id)}}"><span data-feather="plus"></span> Info</a>
                    <a class="btn btn-warning" href="{{ route('admin.cursos.editar',$registro->id) }}"><span data-feather="edit-3"></span> Editar</a>
                    <a class="btn btn-danger" href="{{ route('admin.cursos.deletar',$registro->id) }}"><span data-feather="trash"></span> Excluir</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <br>
          <div class="row" class="">
            <a class="btn btn-info mb-5 ml-lg-3" href="{{ route('admin.cursos.adicionar') }}"><span data-feather="plus"></span> Adicionar</a>
          <div>

  </main>
    
@endsection
