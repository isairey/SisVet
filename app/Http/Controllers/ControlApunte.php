<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 26/12/2015
 * Time: 9:29 PM
 */

namespace App\Http\Controllers;


use App\Atencion\Apunte;

class ControlApunte extends Controller
{
    private $serviceLog;
    private $serviceApunte;

    /**
     * ControlApunte constructor.
     * @param $serviceLog
     * @param $serviceControlApunte
     */
    public function __construct()
    {
        $this->serviceLog = new ServiceLog();
        $this->serviceApunte = new ServiceApunte();
    }

    public function nuevoApunte(Apunte $apunte)
    {
        $result = $this->serviceApunte->nuevoApunte($apunte);

        if ($result) {
            $log = new Log();
            $log->setIdAnimal($apunte->getIdAnimal());
            $log->setTipoLog('Apunte');
            $log->setDescripcion('Apunte creado con exito');
            $this->serviceLog->nuevoLog($log);

            return 'Apunte creada con exito';
        } else {
            return 'Error al crear apunte, intentelo nuevamente';
        }
    }

    public function editarAponte(Apunte $apunte)
    {
        $result = $this->serviceApunte->editarApunte($apunte);
        if ($result) {
            return 'Apunte agregado con exito';
        } else {
            return 'Problemas con la edicion del apunte, intente nuevamente';
        }
    }

    public function eliminarApunte($idApunte)
    {
        $result = $this->serviceApunte->eliminarApunte($idApunte);
        if ($result) {
            return 'Apunte eliminado con exito';
        } else {
            return 'No se pudo eliminar, intente nuevamente';
        }

    }

    public function obtenerApunteAnimal($idAnimal)
    {
        /*** retorna un arreglo de puntes de un animal********/
        $result=$this->serviceApunte->obtenerApuntesAnimal($idAnimal);
        if ($result==null) {
            return 'No se encontraron datos';
        } else {
            return $result;
        }
    }

    public function obtenerApuntePersonal($idAnimal)
    {
        /*** retorna un arreglo de puntes de un  que resgitro un personal ********/
        $result=$this->serviceApunte->obtenerApuntesAnimal($idAnimal);
        if ($result==null) {
            return 'No se encontraron datos';
        } else {
            return $result;
        }
    }

    public function obtenerApunte($idAnimal,$fechaApunte)
    {
        /*** retorna un apunte pero la busqueda se hace por id de un animal y por la fecha********/
        $result=$this->serviceApunte->obtenerApuntesFecha($idAnimal,$fechaApunte);
        if ($result==null) {
            return 'No se encontraron datos';
        } else {
            return $result;
        }
    }


}