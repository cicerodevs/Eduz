
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Cadastro | Área Administrativa Eduz</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <style type="text/css">
      html,
        body {
          height: 100%;
        }

        body {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-align: center;
          align-items: center;
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
        }

        .form-signin {
          width: 100%;
          max-width: 330px;
          padding: 15px;
          margin: auto;
        }
        .form-signin .checkbox {
          font-weight: 400;
        }
        .form-signin .form-control {
          position: relative;
          box-sizing: border-box;
          height: auto;
          padding: 10px;
          font-size: 16px;
        }
        .form-signin .form-control:focus {
          z-index: 2;
        }
        .form-signin input[type="email"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }
    </style>
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="{{ route('register') }}">
       {{ csrf_field() }}
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-5 font-weight-normal">Cadastro | <span style="color: #2372ea; font-weight: 700;">Eduz</span></h1>
       <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        <input id="nome" type="text" class="form-control" name="nome" value="{{ old('name') }}" placeholder="Nome" required autofocus>
         @if ($errors->has('nome'))
            <span class="help-block">
                <strong>{{ $errors->first('nome') }}</strong>
            </span>
         @endif
      </div>
      <div class="form-group{{ $errors->has('sobrenome') ? ' has-error' : '' }}">
        <input id="sobrenome" type="text" class="form-control" name="sobrenome" value="{{ old('sobrenome') }}" placeholder="Sobrenome" required autofocus>

          @if ($errors->has('sobrenome'))
              <span class="help-block">
                  <strong>{{ $errors->first('sobrenome') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
        <input id="telefone" type="text" class="form-control" name="telefone" value="{{ old('telefone') }}" placeholder="Telefone" required autofocus>

        @if ($errors->has('telefone'))
            <span class="help-block">
                <strong>{{ $errors->first('telefone') }}</strong>
            </span>
        @endif
      </div>
       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
       </div>
       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
         <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
       </div>
       <div class="form-group">
           <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha" required>
       </div>
   
      <button class="btn btn-lg btn-primary btn-block" type="submit">Criar conta</button>
      <br>
      
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>
  </body>
</html>