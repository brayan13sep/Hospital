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

    <title>Neonato</title>

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
      <div class="panel panel-default">
  <div class="panel-body">

      <form method="POST" action="inserts/insert-neonato.php" id="formulario">
        <fieldset>

          <legend > <i class="glyphicon glyphicon-baby-formula"></i>  Datos del nacimiento</legend>
          <table class="table table-bordered">
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Genero:</font></font></label></td>
              <td><select name="Genero" class="form-control"><option>Seleccione Genero</option><option value="Masculino">Masculino</option><option value="Femenino">Femenino</option></select></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Peso:</font></label></td>
              <td ><input name="Peso" type="text" class="form-control" placeholder="gr."></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Talla:</font></label></td>
              <td ><input name="Talla" type="text" class="form-control" placeholder="cm."></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">RFID:</font></label></td>
              <td colspan="4"><input type="text" class="form-control" name="RFID" placeholder="RFID"></td>
            </tr>
            <tr>
              <td colspan="2"bgcolor="#0D47A1"><label><font color="#FFFFF"></font></font></label></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Perimetro cefalico:</font></label></td>
              <td ><input name="perimetro_cefalico" type="text" class="form-control" placeholder="cm."></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Perimetro toracico:</font></label></td>
              <td ><input name="perimetro_toracico" type="text" class="form-control" placeholder="cm."></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Fecha de nacimiento:</font></label></td>
              <td colspan="3"><input type="text" class="form-control" name="FechaNacimiento" id="datepicker" placeholder="mm/dd/yyyy"></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Hora de nacimiento:</font></label></td>
              <td ><input name="hora_de_nacimiento" type="text" class="form-control" placeholder="Hrs:Min"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Sede:</font></label></td>
              <td colspan="5"><select name="Sede" class="form-control"><option>seleccione</option>

                </select></td>
            </tr>
          </table>
        </fieldset>
        <fieldset>
          <legend>Datos del parto</legend>
          <table class="table table-bordered">
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Atendio el parto:</font></font></label></td>
              <td><select name="atendio_parto" class="form-control"><option>Seleccione</option>

              </select></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Tipo de parto:</font></label></td>
              <td><select name="tipo_parto" class="form-control"><option>Seleccione</option>

              </select></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Condicion del parto:</font></font></label></td>
              <td><select name="condicion_parto" class="form-control"><option>Seleccione</option>

              </select></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Duracion del embarazo:</font></label></td>
              <td><input name="duracion_del_embarazo" type="text" class="form-control" placeholder="No. Semanas"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Malformacion congenita evidente:</font></font></label></td>
              <td><select name="malformacion_congenita" class="form-control"><option>Seleccione</option><option>SI</option><option>NO</option></select></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Lactancia precoz:</font></font></label></td>
              <td><select name="lactancia_precoz" class="form-control"><option>Seleccione</option><option>SI</option><option>NO</option></select></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Tiempo de ligadura y corde del cordon umbilical:</font></font></label></td>
              <td colspan="4"><select name="tipo_de_ligadura_y_corte_del_cordon" class="form-control"><option>Seleccione</option><option>Inmediato</option><option>2 A 3 min</option></select></td>
            </tr>
          </table>
        </fieldset>
        <div class="col-sm-3" ></div>
         <div class="col-sm-8" >
        <div class="row">
          <button type="button" onclick="Limpiar()" class="btn btn-danger">Limpiar <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
          <button type="button" onclick=" location.href=madre.php" class="btn btn-primary">Atras <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button>
          <button type="submit" class="btn btn-primary">Siguiente <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
      </div>
         </div>
      </form>
 </div>
</div>
    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
 {!! Html::script('/hospital/public/../vendor/twbs/bootstrap/docs/dist/js/bootstrap.min.js')!!}

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    {!! Html::script('/hospital/public/../vendor/twbs/bootstrap/docs/assets/js/vendor/holder.min.js')!!}

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!! Html::script('/hospital/public/../vendor/twbs/bootstrap/docs/assets/js/ie10-viewport-bug-workaround.js')!!}

    {!! Html::script('/hospital/public/../vendor/twbs/bootstrap/js/jquery-ui/jquery-ui.min.js')!!}

    {!! Html::script('/hospital/public/../vendor/twbs/bootstrap/js/jquery-ui/jquery-ui.js')!!}

    {!! Html::script('/hospital/public/../vendor/twbs/bootstrap/js/jaquery-ui/external/jquery/jquery.js')!!}
    <script>
      $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
       $( function() {
    $( "#datepicker2" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
    </script>
    <script>
      function Limpiar() {
        document.getElementById("formulario").reset();
      }
</script>
  </body>
</html>
