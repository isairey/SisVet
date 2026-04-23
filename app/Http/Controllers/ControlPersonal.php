<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 24/12/2015
 * Time: 12:01 AM
 */

namespace App\Http\Controllers;
use App\Http\Controllers\ServicePersonal;

use App\Atencion\Personal;

class ControlPersonal extends Controller
{
    private $service;

    /**
     * ControlPersonal constructor.
     * @param $servicePersonal
     * @param $serviceLog
     */
    public function __construct()
    {
        $this->service = new ServicePersonal();
    }

    public function nuevoPersonal(Personal $personal)
    {
        $result = $this->service->nuevoPersonal($personal);
        if ($result) {
            return 'El personal se a registrado exitosamente';
        } else {
            return 'No se logro registrar al personal';
        }
    }

    public function editarPersonal(Personal $personal)
    {
        $result =$this->service->editarPersonal($personal);
        if ($result) {
            return 'El personal se a editado exitosamente';
        } else {
            return 'Error al editar a la persona';
        }
    }

    public function eliminarPersonal($idPersonal)
    {
        $result = $this->service->eliminarPersonal($idPersonal);
        if ($result) {
            return 'El personal se a registrado exitosamente';
        } else {
        }
    }

    public  function obtenerPersonal($idPersonal)
    {
        $result = $this->service->mostrarPersonal($idPersonal);
        if (null) {
            return 'No se encontraron datos del personal';
        } else {
            return $result;
        }
    }
    public function obtenerPersonales()
    {
        $result = $this->service->mostrarPersonales();
        if (null) {
            return 'No se encontraron datos de los personales, por favor ingrese datos ...';
        } else {
            return $result;
        }
    }


}