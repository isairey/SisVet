<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 26/12/2015
 * Time: 8:46 PM
 */

namespace App\Http\Controllers;

use App\Atencion\Log;
use App\Atencion\Analisis;

class ControlAnalisis extends Controller
{
    public $serviceAnalis;
    public $serviceTipoAnalisis;
    public $serviceLog;

    public function __construct()
    {
        $this->serviceAnalis = new ServiceAnalisis();
        $this->serviceTipoAnalisis = new ServiceTipoAnalisis();
        $this->serviceLog = new ServiceLog();

    }

    public function nuevoAmalisis(Analisis $analisis)
    {
        $result = $this->serviceAnalis->nuevoAnalisis($analisis);
        if ($result) {
            $log = new Log();
            $log->setIdAnimal($analisis->getIdAnimal());
            $log->setTipoLog('Analisis');
            $log->setDescripcion('Analisis Creada con exito');
            $this->serviceLog->nuevoLog($log);
            return 'Analisis  creado con exito';
        } else {
            return 'Error al crear analisis, intentelo nuevamente';
        }
    }

    public function editarAnalisis(Analisis $analisis)
    {
        $result = $this->serviceAnalis->editarAnalisis($analisis);
        if ($result) {
            return 'Analisis editado correctamente';
        } else {
            return 'Error al editar el analisis, verifique los errores';
        }
    }

    public function  eliminarAnalisis($idAnalisis)
    {
        $result = $this->serviceAnalis->eliminarAnalisis($idAnalisis);
        if ($result) {
            return 'Analisis eliminado con exito';
        } else {
            return 'Error al eliminar el analisis';
        }
    }

    /****** encuentra un analisis se usa el id del animal y la fecha*******/

    public function obtenerAnalisis($idAnimal,$fechaAnalisis)
    {
        $result=$this->serviceAnalis->obtenerAnalisis($idAnimal,$fechaAnalisis);
        if($result==null)
        {
            return 'Error al obtener analisis, no existen datos';
        }else{
            return $result;
        }
    }

    public function obtnerAnalisisAnimal($idAnimal)
    {
        $result=$this->serviceAnalis->obtenerAnalisisDeAnimal($idAnimal);
        if($result==null)
        {
            return 'Error al obtener analisis, no existen datos';
        }else{
            return $result;
        }

    }

    public function obtnerAnalisisPersonal($idPersonal)
    {
        $result=$this->serviceAnalis->obtenerAnalisisPersonal($idPersonal);
        if($result==null)
        {
            return 'Error al obtener analisis, no existen datos';
        }else{
            return $result;
        }
    }
}
