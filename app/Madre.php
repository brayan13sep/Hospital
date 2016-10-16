<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Madre extends Model
{
    protected $madre = 'madre';
    protected $fillable = [
     'dpi',
     'rfid',
     'nombre',
     'primer_apellido',
     'segundo_apellido',
     'fecha_de_nacimiento',
     'edad',
     'direccion',
     'tipo_de_ocupacion',
     'total_de_embarazos',
     'hijos_actualmente_vivos',
     'hijos_nacidos_vivos_que_fallecieron',
     'abortos_o_nacidos_muertos',
     'fecha_nacimiento_ultimo_hijo',
     'tipo_documento',
     'estado_civil',
     'nivel_educativo',
     'activo',
     'timestamp'
     ];
     protected $guarded = [id];
}
