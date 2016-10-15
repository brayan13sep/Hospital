<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Madre as Madre;

class MadreController extends Controller
{
    //Insertar datos

    public function iFormulario(Requests $requests)
    {
    	$madre = new Madre;
    	$madre ->dpi = $requests->dpi;
    	$madre ->rfid = $requests->rfid;
    	$madre ->nombre = $requests->nombre;
    	$madre ->primer_apellido = $requests->primer_apellido;
    	$madre ->segundo_apellido = $requests->segundo_apellido;
    	$madre ->fecha_de_nacimiento = $requests->fecha_de_nacimiento;
    	$madre ->edad = $requests->edad;
    	$madre ->direccion = $requests->direccion;
    	$madre ->tipo_de_ocupacion = $requests->tipo_de_ocupacion;
    	$madre ->total_de_embarazos = $requests->total_de_embarazos;
    	$madre ->hijos_actualmente_vivos = $requests->hijos_actualmente_vivos;
    	$madre ->hijos_nacidos_vivos_que_fallecieron = $requests->hijos_nacidos_vivos_que_fallecieron;
    	$madre ->abortos_o_nacidos_muertos = $requests->abortos_o_nacidos_muertos;
    	$madre ->fecha_nacimiento_ultimo_hijo = $requests->fecha_nacimiento_ultimo_hijo;
    	$madre ->tipo_documento = $requests->tipo_documento;
    	$madre ->estado_civil = $requests->estado_civil;
    	$madre ->nivel_educativo = $requests->nivel_educativo;
    	$madre ->activo = $requests->activo;
    	$madre ->timestamp = $requests->timestamp;

    	$madre->save();
    	return redirect('/hospital/public/madreform');
    }
}
