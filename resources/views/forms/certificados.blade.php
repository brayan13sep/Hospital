<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
  {!! Html::style('/hospital/public/../vendor/twbs/bootstrap/docs/dist/css/bootstrap.min.css')!!}  
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  {!! Html::style('/hospital/public/../vendor/twbs/bootstrap/docs/assets/css/ie10-viewport-bug-workaround.css')!!}
    

    <!-- Custom styles for this template -->
    {!! Html::style('/hospital/public/../vendor/twbs/bootstrap/docs/examples/jumbotron-narrow/jumbotron-narrow.css')!!}
    
    {!! Html::style('/hospital/public/../vendor/twbs/bootstrap/js/jquery-ui/jquery-ui.css')!!}
    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    {!! Html::script('/hospital/public/../vendor/twbs/bootstrap/docs/assets/js/ie-emulation-modes-warning.js')!!}
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Inicio</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perfil <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="#">Cerrar Sesion</a></li>
                 </ul>
              </li>
          </ul>
        </nav>
        <h3 class="text-muted">Hospital</h3>
      </div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Panel info</h3>
  </div>
  <div class="panel-body">
    <div class="page-header">
        <h1>Modulo de certificado nacido vivo</h1>
        <p>
          <a href="madre.php" class="btn btn-primary"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Registrar Certificado</a>
          <a href="editar-certificado.php" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Certificado</a>
        </p>
      </div>
 
      <div class="page-header">
        <h1>Modulo de consultas</h1>
        <p>
          <a href="consulta-de-certificado.php" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Consultas de Certificado</a>
        </p>
      </div>
      <div class="page-header">
        <h1>Modulo de reportes</h1>
        <p>
          <a href="reportes.php" class="btn btn-primary"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Reporte de Certificados</a>
        </p>
      </div>
    </div> <!-- /container -->
 </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    {!! Html::script('../vendor/twbs/bootstrap/docs/dist/js/bootstrap.min.js')!!}
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    {!! Html::script('../vendor/twbs/bootstrap/docs/assets/js/vendor/holder.min.js')!!}
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!! Html::script('../vendor/twbs/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js')!!}
  </body>
</html>