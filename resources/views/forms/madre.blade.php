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

    <title>Madre</title>

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
      <form method="POST" action="" id="formulario">
        <fieldset>
          <legend> Datos de la madre</legend>
          <table class="table table-bordered">
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Tipo de documento:</font></font></label></td>
              <td><select name="TipoDocumento" class="form-control"><option>Seleccione</option>
</select></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Numero:</font></label></td>
              <td colspan="2"><input type="text" class="form-control" name="DPI" placeholder="Numero"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Primer Apellido:</font></label></td>
              <td colspan="4"><input type="text" class="form-control" name="primer_apellido" placeholder="Primer Apellido"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">RFID:</font></label></td>
              <td colspan="4"><input type="text" class="form-control" name="RFID" placeholder="RFID"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Segundo Apellido:</font></label></td>
              <td colspan="4"><input type="text" class="form-control" name="segundo_apellido" placeholder="Segundo Apellido"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Nombres:</font></label></td>
              <td colspan="4"><input type="text" class="form-control" name="Nombre" placeholder="Nombres"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Fecha de nacimiento:</font></label></td>
              <td colspan="3"><input type="text" class="form-control" name="fecha_nacimiento" id="datepicker" placeholder="mm/dd/yyyy"></td>
              <td colspan="2"><input type="text" class="form-control" name="Edad" placeholder="Edad"></td>

            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Estado civil:</font></label></td>
              <td colspan="5"><select name="estado_civil" class="form-control"><option>Seleccione</option>
              
              </select></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Direccion:</font></label></td>
              <td colspan="5"><textarea type="text" row="5" name="Direccion" class="form-control" placeholder="Direccion"></textarea> </td>
            </tr>
          </table>
        </fieldset>
        <fieldset>
          <legend>Datos adicionales de la madre</legend>
          <table class="table table-bordered">
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Nivel educativo:</font></font></label></td>
              <td colspan="3"><select name="nivel_educativo" class="form-control"><option>Seleccione</option>
                
              </select></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">No. Total de embarazos:</font></label></td>
              <td ><input type="text" name="total_de_embarazos" class="form-control" placeholder="Numero"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Tipo de ocupacion:</font></font></label></td>
              <td colspan="5"><input type="text" name="tipo_ocupacion" class="form-control" placeholder="Ocupacion"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Hijos actualmente vivos:</font></font></label></td>
              <td><input type="text" name="hijos_actualmente_vivos" class="form-control" placeholder="Cantidad"></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Hijos nacidos vivos que fallecieron:</font></font></label></td>
              <td><input type="text" name="hijos_nacidos_vivo_que_fallecieron" class="form-control" placeholder="Cantidad"></td>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">No. de abortos y nacidos muertos:</font></font></label></td>
              <td><input type="text" name="abortos_o_nacidos_muertos" class="form-control" placeholder="Cantidad"></td>
            </tr>
            <tr>
              <td bgcolor="#0D47A1"><label><font color="#FFFFF">Fecha de nacimiento hijo anterior nacido vivo:</font></label></td>
              <td colspan="2"><input type="text" class="form-control" name="fecha_nacimiento_ultimo_hijo" id="datepicker2" placeholder="mm/dd/yyyy"></td>
              <td colspan="3"></td>
            </tr>
          </table>
        </fieldset> 
        <div class="row">
          <button type="button" onclick="Limpiar()" class="btn btn-danger">Limpiar <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
          <button type="button" onclick=" location.href='{{ url('/hospital/public/certificados') }}'" class="btn btn-primary">Atras <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button>
          <button type="submit" class="btn btn-primary">Siguiente <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
      </div>
      </form>

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
