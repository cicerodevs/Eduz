
<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Cicero Sousa">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Eduz | Sua plataforma de estudos online</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Estilos customizados para esse template -->
    <link href="{{ asset('css/template.css') }}" rel="stylesheet"> 
    <!--Font Awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body>

    <header id="header">
      <nav class="navbar navbar-expand-lg navbar-dark pt-5">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="#">Eduz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">

          <ul class="navbar-nav mr-auto">
            <form class="form-inline mt-2 mt-md-0 mr-lg-5" method="POST" action="{{route('busca')}}">
              {{ csrf_field() }}
              <input class="form-control mr-sm-2" type="text" placeholder="O que você busca?" aria-label="Search" name="buscar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <li class="nav-item ml-lg-5 ">
              <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-lg-5">
              <a class="nav-link" href="#">Formação</a>
            </li>
         </ul>
         <div>
          <!-- Authentication Links -->
          @if (Auth::guest())
           <ul class="navbar-nav">
             <li class="nav-item mr-lg-3">
               <a class="nav-link " href="{{ route('login') }}">Entrar</a>
             </li>
             <li class="nav-item mat">
               <a class="nav-link" href="{{ route('register') }}" style="color: #fff!important;">Registre-se</a>
             </li>
           </ul>
          @else
          <ul class="navbar-nav">
           <li class="nav-item mr-lg-5">
             <a class="nav-link " href="{{route('meus.cursos')}}">Meus cursos</a>
           </li>
         
          <div class="dropdown mt-2" style="cursor: pointer;">
          <a class="dropdown-toggle text-white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong>{{ Auth::user()->nome }}</strong>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('minha.conta')}}">Minha conta</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Sair</a>
          </div>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
           </form>
          </div>
            @endif
           </ul>
         </div>
        </div>
      </div>
    </nav> 
    <div class="mt-5 ml-lg-4">
      <h1 class="text-white  col-lg-5 ml-lg-5 pl-lg-5">Cursos de Tecnologia e Negócios Digitais</h1>
      <h4 class="text-white col-lg-5 ml-lg-5 pl-lg-5 pt-3">
        Você vaiestudar, praticar, discutir e aprender em uma comunidade de inquietos e inovadores.
      </h4>
    </div>
   <!-- Cards -->
   <div class="container-fluid pt-5">
      <div class="row justify-content-center">
      <div class="card col-lg-3 mr-lg-5">
        <div class="card-body">
          <a href="{{ route('curso.mobile') }}" class="mobile"><h5 class="card-title"><span style="font-size: 16px;font-weight: 300;">Cursos de <br></span> Mobile</h5></a>
          <p class="card-text">iOS e Swift, Android e Kotlin, Ionic, React Native, Jogos, e mais...</p>
        </div>
      </div>   
      <div class="card col-lg-3  mr-lg-5 ">
        <div class="card-body">
          <a href="{{ route('curso.web') }}" class="front"><h5 class="card-title"><span style="font-size: 16px;font-weight: 300;">Cursos de <br></span>Front End & Back End</h5></a>
          <p class="card-text">HTML, CSS, JavaScript, jQuery, Angular, React, e mais...</p>
        </div>
      </div>
      <div class="card col-lg-3">
        <div class="card-body">
          <a href="{{ route('curso.design') }}" class="design"><h5 class="card-title"><span style="font-size: 16px;font-weight: 300;">Cursos de <br></span>Design & UX</h5></a>
          <p class="card-text">Photoshop e Illustrator, Vídeo e Motion, 3D, Usabilidade e UX, e mais...</p>
        </div>
      </div> 
   </div>


  </header>
   @yield('content')