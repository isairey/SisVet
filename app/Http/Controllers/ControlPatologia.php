<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 27/12/2015
 * Time: 3:34 PM
 */

namespace App\Http\Controllers;


use App\Atencion\Patologia;

class ControlPatologia extends Controller
{
    private $servicePatologia;

    public function __construct()
    {
        $this->servicePatologia = new ServicePatologia();
    }

    public function nuevaPatologia(Patologia $patologia)
    {
        $result = $this->servicePatologia->agregarPatologia($patologia);
        if ($result) {
            return "Patologia agregada con exito";
        } else {
            return "problemas en el registro, error en el ingreso de datos";
        }
    }

    public function editarPatologia(Patologia $patologia)
    {
        $result = $this->servicePatologia->editarPatologia($patologia);
        if ($result) {
            return "Patologia editada con exito";
        } else {
            return "problemas en el registro, error en el ingreso de datos";
        }
    }

    public function eliminarPatologia($idPatologia)
    {
        $result = $this->servicePatologia->eliminarPatologia($idPatologia);
        if ($result) {
            return "Patologia eliminada con exito";
        } else {
            return "problemas en el registro, error en el ingreso de datos";
        }
    }

    public function obtenerPatologia($idPatologia)
    {
        /***** obtiene una patologia y toda su info *********/
        $result = $this->servicePatologia->mostrarPatologiaID($idPatologia);
        if ($result==null) {
            return 'No se encontraron datos, intente nuevamente';
        } else {
            return $result;
        }
    }
    public function obtenerPatologiaPorNombre($nombre)
    {
        /***** devuelve un arreglo de patologias filtradas por nombre, id y nombrew*********/
        $result = $this->servicePatologia->mostrarPatologiaPorNombre($nombre);
        if ($result==null) {
            return 'No se encontraron datos, intente nuevamente';
        } else {
            return $result;
        }
    }
    public function obtenerPatologias()
    {
        /***** obtiene todas las patologias*********/
        $result = $this->servicePatologia->mostrarNombresPatologias();
        if ($result==null) {
            return 'No se encontraron datos, intente nuevamente';
        } else {
            return $result;
        }
    }


}