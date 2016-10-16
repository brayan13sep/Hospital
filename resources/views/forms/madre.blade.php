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
      <div class="panel panel-default">
        <div class="panel-body">
          <form method="POST" action="" id="formulario">
            <fieldset>
              <legend> Datos de la madre</legend>
              <table class="table table-bordered">
                <tr>
                  <td bgcolor="#0D47A1"><label><font color="#FFFFF">{!! Form::label('full_name', 'Tipo de documento:')!!}</font></label></td>
                  <td>
                    <select name="TipoDocumento" class="form-control">
                      <option>Seleccione</option>
                    </select>
                  </td>
                  <td bgcolor="#0D47A1"><label><font color="#FFFFF">{!! Form::label('full_name', 'Numero:')!!}</font></label></td>
                  <td colspan="2">
                  {!! Form::text('dpi', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'DPI']) !!}
                </tr>
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Primer Apellido:')!!}</font></label>
                  </td>
                  <td colspan="4">
                  {!! Form::text('primer_apellido', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'primer apellido']) !!}
                    
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'RFID:')!!}</font></label>
                  </td>
                  <td colspan="4">
                    {!! Form::text('RFID', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'RFID']) !!}
                    
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Segundo Apellido:')!!}</font></label>
                  </td>
                  <td colspan="4">
                  {!! Form::text('segundo_apellido', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'segundo apellido']) !!}
                    
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Nombre:')!!}</font></label>
                  </td>
                  <td colspan="4">
                  {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Nombres']) !!}
                    
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Fecha de nacimiento:')!!}</font></label>
                  </td>
                  <td colspan="3">
                  {!! Form::text('fecha_nacimiento', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'mm/dd/yyyy', 'id' => 'datepicker']) !!}
                   
                  </td>
                  <td colspan="2">
                    {!! Form::text('edad', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'edad']) !!}
                    
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Estado civil:')!!}</font></label>
                  </td>
                  <td colspan="5">
                    <select name="estado_civil" class="form-control">
                      <option>Seleccione</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Direccion:')!!}</font></label>
                  </td>
                  <td colspan="5">
                  {!! Form::textarea('Direccion', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Direccion','row' => '5' ]) !!}
                    
                  </td>
                </tr>
              </table>
            </fieldset>
            <fieldset>
              <legend>Datos adicionales de la madre</legend>
              <table class="table table-bordered">
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Nivel educativo:')!!}</font></label>
                  </td>
                  <td colspan="3">
                    <select name="nivel_educativo" class="form-control">
                      <option>Seleccione</option>
                    </select>
                  </td>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'No. total de embarazos:')!!}</font></label>
                  </td>
                  <td >
                  {!! Form::text('total_de_embarazos', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Numero']) !!}
                    
                  </td>
                </tr>
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Tipo de ocupacion:')!!}</font></label>
                  </td>
                  <td colspan="5">
                  {!! Form::text('tipo_ocupacion', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Ocupacion']) !!}
                  
                </tr>
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Hijos actualmente vivos:')!!}</font></label>
                  </td>
                  <td>
                  {!! Form::text('hijos_actualmente_vivos', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Cantidad']) !!}
                    
                  </td>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Hijos nacidos vivos que fallecieron:')!!}</font></label>
                  </td>
                  <td>
                  {!! Form::text('hijos_nacidos_vivo_que_fallecieron', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Cantidad']) !!}
                  
                  </td>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'No. abortos y nacidos muertos:')!!}</font></label>
                  </td>
                  <td>
                    {!! Form::text('abortos_o_nacidos_muertos', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'Cantidad']) !!}

                  </td>
                </tr>
                <tr>
                  <td bgcolor="#0D47A1">
                    <label><font color="#FFFFF">{!! Form::label('full_name', 'Fecha de nacimiento hijo anterior:')!!}</font></label>
                  </td>
                  <td colspan="2">
                  {!! Form::text('fecha_nacimiento_ultimo_hijo', null, ['class' => 'form-control' , 'required' => 'required', 'placeholder' => 'mm/dd/yyyy', 'id' => 'datepicker2']) !!}
                   
                  </td>
                  <td colspan="3"></td>
                </tr>
              </table>
            </fieldset>
            <div class="col-sm-3" ></div>
            <div class="col-sm-8" >
              <div class="row">
                <button type="button" onclick="Limpiar()" class="btn btn-danger">Limpiar <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                <button type="button" onclick=" location.href='{{ url('/hospital/public/certificados') }}'" class="btn btn-primary">Atras <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button>
                <button type="submit" class="btn btn-primary">Siguiente <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /container -->
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