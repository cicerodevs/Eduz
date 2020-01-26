
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Login | Portal do Aluno Eduz</title>

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
    <form class="form-signin"method="POST" action="{{ route('login') }}">
       {{ csrf_field() }}
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-5 font-weight-normal">Login | <span style="color: #2372ea; font-weight: 700;">Eduz</span></h1>
     
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
         @if ($errors->has('email'))
          <span class="help-block">
             <strong>{{ $errors->first('email') }}</strong>
          </span>
         @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
         @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar de mim
              </div>
            </div>
        </div>
   
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <br>
      <p><a href="{{ route('password.request') }}">Esqueci minha senha</a></p>
      <p>Ainda não tem cadastro? <a href="{{url('/register') }}">Cadastre-se</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>
  </body>
</html>