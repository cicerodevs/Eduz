<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Eduz | Sua plataforma de estudos online</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/template.css" rel="stylesheet">
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
            <form class="form-inline mt-2 mt-md-0 mr-lg-5">
            <input class="form-control mr-sm-2" type="text" placeholder="O que você busca?" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
          </form>
         @if (Route::has('login'))
           @if (Auth::check())
            <li class="nav-item ml-lg-5 ">
              <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
           @else
            <li class="nav-item ml-lg-5">
              <a class="nav-link" href="#">Formação</a>
            </li>
            <li class="nav-item ml-lg-5">
              <a class="nav-link " href="#">Blog</a>
            </li>
         </ul>
         <div class="mr-lg-5">
           <ul class="navbar-nav">
             <li class="nav-item mr-lg-5 mt-lg-2">
               <a class="nav-link " href="{{ url('/login') }}">Entrar</a>
             </li>
             <li class="nav-item mat">
               <a class="nav-link " href="{{ url('/register') }}">Registre-se</a>
             </li>
           @endif
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

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

