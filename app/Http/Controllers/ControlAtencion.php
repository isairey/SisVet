<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 24/12/2015
 * Time: 2:07 PM
 */

namespace App\Http\Controllers;


use App\Atencion\Atencion;
use App\Atencion\Log;
use App\Atencion\Retorno;

class ControlAtencion extends Controller
{
    public $serviceAtencion;
    public $serviceRetorno;
    public $serviceLog;

    public function __construct()
    {
        $this->serviceAtencion = new ServiceAtencion();
        $this->serviceRetorno = new ServiceRetorno();
        $this->serviceLog = new ServiceLog();
    }

    /********************Atencion*************************/

    public function nuevaAtencion(Atencion $atencion)
    {
        $result = $this->serviceAtencion->nuevaAtencion($atencion);
        if ($result) {
            $log = new Log();
            $log->setIdAnimal($atencion->setIdAnimal());
            $log->setTipoLog('Atencion');
            $log->setDescripcion('Atencion Creada con exito');
            $this->serviceLog->nuevoLog($log);

            return 'Atencion creada con exito';
        } else {
            return 'Error al crear atencion, intentelo nuevamente';
        }

    }

    public function editarAtencion(Atencion $atencion)
    {
        $result = $this->serviceAtencion->editarAtencion($atencion);
        if ($result) {
            return 'Atencion modificada con exito';
        } else {
            return 'Error al modificar la atencion, intentelo nuevamente';
        }

    }

    public function eliminarAtencion($idAtencion)
    {
        $result = $this->serviceAtencion->eliminarAtencion($idAtencion);
        if ($result) {
            return 'Atencion modificada con exito';
        } else {
            return 'Error al modificar la atencion, intentelo nuevamente';
        }
    }

    /***** devuelve atenciones de un animale (array) *************/
    public function obtenerAtencionesAnimal($idAnimal)
    {  /**retorna un arreglo****/
        $result = $this->serviceAtencion->obtenerAtencionesAnimal($idAnimal);
        if ($result == null) {
            return 'No existen datos';
        } else {
            return $result;
        }
    }

    public function obtenerAtencionPorPesonal($idPersonal)
    {
        /**retorna un arreglo****/
        $result = $this->serviceAtencion->obtenerAtencionesPersonal($idPersonal);
        if ($result == null) {
            return 'No existen datos';
        } else {
            return $result;
        }
    }

    public function obtenerTodasLasAtenciones()
    {  /**retorna un arreglo****/
        $result = $this->serviceAtencion->obtenerAtenciones();
        if ($result == null) {
            return 'No existen datos';
        } else {
            return $result;
        }
    }
    /**** obtiene todos los datos de una atencion de un animal*****///
    public function obeterAtencion($idAtencion)
    {
        $result=$this->serviceAtencion->obtenerAtencion($idAtencion);
        if ($result == null) {
            return 'No existen datos';
        } else {
            return $result;
        }
    }

    /************************************** Retorno*************************************/
    /*** crea una atencion con retorno******/
    public function nuevoAtencionConRetorno(Atencion $atencion,Retorno $retorno)
    {
        $result1 = $this->serviceAtencion->nuevaAtencion($atencion);
        $result2= $this->serviceRetorno->nuevoRetorno($retorno);
        if ($result1 && $result2) {
            $log = new Log();
            $log->setIdAnimal($atencion->setIdAnimal());
            $log->setTipoLog('Atencion con Retorno');
            $log->setDescripcion('Atencion con retorno creado exitosamente');
            $this->serviceLog->nuevoLog($log);
            return 'Atencion creada con exito';
        } else {
            return 'Error al crear atencion, intentelo nuevamente';
        }

    }

    public function editarRetorno(Retorno $retorno)
    {
        $result=$this->serviceRetorno->editarRetorno($retorno);
        if ($result) {
            return 'Retorno modificado con exito';
        } else {
            return 'Error al modificar el retorno, intentelo nuevamente';
        }
    }

    public function eliminarRetorno($idAtencion)
    {
        $result=$this->serviceRetorno->eliminarRetorno($idAtencion);
        if ($result) {
            return 'Retorno eliminado con exito';
        } else {
            return 'Error al eliminar el retorno, intentelo nuevamente';
        }
    }

    public function obtenerRetorno($idAtencion)
    {
        $result=$this->serviceRetorno->obetnerRetornoAtencion($idAtencion);
        if ($result==null) {
            return 'No existen datos';
        } else {
            return $result;
        }
    }

    public function obtenerRetornos()
    {
        $result=$this->serviceRetorno->obtenerRetornos();
        if ($result==null) {
            return 'No existen datos';
        } else {
            return $result;
        }
    }
}