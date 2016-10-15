<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login Hospital</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('/hospital/publi/../vendor/twbs/bootstrap/dist/css/bootstrap.min.css')!!}
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!! Html::style('/hospital/publi/../vendor/twbs/bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css')!!}
    {!! Html::style('/hospital/publi/../vendor/twbs/bootstrap/docs/examples/signin/signin.css')!!}
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    {!! Html::style('/hospital/publi/../vendor/twbs/bootstrap/docs/assets/js/ie-emulation-modes-warning.js')!!}
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    {!! Html::script('/hospital/publi/../vendor/twbs/bootstrap/docs/assets/js/ie-emulation-modes-warning.js')!!}
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
      {!! Form::open(['route' => '/hospital/public/login', 'class' => 'form']) !!}
        <h2 class="form-signin-heading">Iniciar sesion</h2>
        <label for="inputEmail" class="sr-only">Usuario</label>
        {!! Form::email('email', '', ['class'=> 'form-control']) !!}
        <input type="email" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        {!! Form::password('password', ['class'=> 'form-control']) !!}
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        {!! Form::submit('login',['class' => 'btn btn-primary']) !!}
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        <button class="btn btn-lg btn-primary btn-block" onclick=" location.href='{{ url('/hospital/public') }}'" type="submit">Regresar</button>
        {!! Form::close() !!}
      </form>

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!! Html::script('/hospital/public ../vendor/twbs/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js')!!}
    
  </body>
</html>
