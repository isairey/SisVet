<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 27/12/2015
 * Time: 2:17 PM
 */

namespace App\Http\Controllers;


use App\Atencion\Receta;

class ControlReceta extends Controller
{
    private $serviceReceta;
    private $serviceLog;


    public function __construct()
    {
        $this->serviceReceta = new ServiceReceta();
        $this->serviceLog = new ServiceLog();
    }

    public function nuevaReceta(Receta $receta)
    {
        $result = $this->serviceReceta->nuevaReceta($receta);
        if ($result) {
            $log = new Log();
            $log->setIdAnimal($receta->getIdAnimal());
            $log->setTipoLog('Receta');
            $log->setDescripcion(' Receta creada con exito');
            $this->serviceLog->nuevoLog($log);

            return 'Atencion creada con exito';
        } else {
            return 'Error al crear atencion, intentelo nuevamente';
        }
    }

    public function editaReceta(Receta $receta)
    {
        $result = $this->serviceReceta->editarReceta($receta);
        if ($result) {
            return 'Receta editada con exito';
        } else {
            return 'Problemas al editar la receta, intente nuevamente';
        }
    }

    public function eliminarReceta(Receta $receta)
    {
        $result = $this->serviceReceta->editarReceta($receta);
        if ($result) {
            return 'Receta eliminada con exito';
        } else {
            return 'Problemas al eliminar la receta, intente nuevamente';
        }
    }

    public function obtenerRecetasAnimal($idAnimal)
    {
        /********* obtiene las recetas de un animal(array)*********/
        $result = $this->serviceReceta->mostrarRecetasAnimal($idAnimal);
        if ($result == null) {
            return 'Datos no encontrados';
        } else {
            return $result;
        }
    }
    public function obtenerRecetasPersonal($idPersonal)
    {
        /********* obtiene las recetas que unpersonal registro(array)*********/
        $result = $this->serviceReceta->mostrarRecetasPersonal($idPersonal);
        if ($result == null) {
            return 'Datos no encontrados';
        } else {
            return $result;
        }
    }
    public  function obtenerTRecetas($idAnimal,$fecha)
    {
        /*********** obtiene la receta pero se busca por el id del animal + la fecha de la receta*********/
        $result=$this->serviceReceta->mostrarRecetaFecha($idAnimal,$fecha);
        if ($result == null) {
            return 'Datos no encontrados';
        } else {
            return $result;
        }
    }

}