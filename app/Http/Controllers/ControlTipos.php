<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 23/12/2015
 * Time: 12:23 PM
 */

namespace App\Http\Controllers;


use App\Atencion\Personal;
use App\Atencion\TipoAnalisis;
use App\Atencion\TipoAtencion;
use App\Atencion\TipoPersonal;
use App\Atencion\TipoTratamiento;
use App\Atencion\Tratamiento;

class ControlTipos extends Controller
{

    private $serviceTratamiento;
    private $servicePersonal;
    private $serviceAtencion;
    private $serviceAnalisis;

    /**
     * Aqui todo los metodos para agregar, modificar, eliminar y obtener los tipos.
     * todos los metodos que no devulevan objetos retornan un mensaje de confirmacion o de negacion
     * de la accion que se realice
     */
    public function __construct()
    {
        $this->serviceTratamiento = new ServiceTipoTratamiento();
        $this->servicePersonal = new ServiceTipoPersonal();
        $this->serviceAtencion = new ServiceTipoAtencion();
        $this->serviceAnalisis = new ServiceTipoAnalisis();
    }

    public function  respuesta($result)
    {
        if ($result) {
            return "Accion ejecutada correctamente...!! ";
        } else {
            return "No se logro el registro, corrija los errores por favor";
        }
    }

    /**************************** Tratamiento********************************/
    public function nuevoTipoTratamiento(TipoTratamiento $tipoTratamiento)
    {
        $result = $this->serviceTratamiento->nuevoTipoTratamiento($tipoTratamiento);
        return $this->respuesta($result);
    }

    public function editarTipoTratamiento(TipoTratamiento $tipoTratamiento)
    {
        $result = $this->serviceTratamiento->editarTipoTratamiento($tipoTratamiento);
        return $this->respuesta($result);
    }

    public function eliminarTipoTratamiento($idTipoTratamiento)
    {
        $result = $this->serviceTratamiento->eliminarTipoTratamiento($idTipoTratamiento);
        return $this->respuesta($result);
    }

    public function obtenerTodoLosTiposTratamiento()
    {
        /**solo deuvelve los id y los nombres de los tipos'getIdTipoTratamiento
         * y getIdnombreTipoTratamiento'*/
        $result = $this->serviceTratamiento->mostrarTiposTratamiento();

        if ($result == null) {
            return " Error al obtener los datos, no existen datos ..!";
        } else {
            return $result;
        }
    }

    /**
     * Aqui los obtener sirven para buscar los tipos ....
     */

    public function obtenerTipoTratamiento($idTipoTratamiento)
    {
        /**solo deuvelve todo los datos puedes usarlo para hacer las ediciones'*/
        $result = $this->serviceTratamiento->mostrarTipoTratamiento($idTipoTratamiento);
        if ($result == null) {
            return " Error al obtener los datos, no existen datos ..!";
        } else {
            return $result;
        }

    }

    /**************************** Personal ********************************/
    public function nuevoTipoPersonal(TipoPersonal $tipoPersonal)
    {
        $result = $this->servicePersonal->nuevoTipoPersonal($tipoPersonal);
        return $this->respuesta($result);
    }

    public function editarTipoPersonal(TipoPersonal $tipoPersonal)
    {
        $result = $this->servicePersonal->editarTipoPersonal($tipoPersonal);
        return $this->respuesta($result);
    }

    public function eliminarTipoPersonal($idTipoPersonal)
    {
        $result = $this > $this->servicePersonal->eliminarTipoPersonal($idTipoPersonal);
        return $this->respuesta($result);
    }

    public function obtenerTiposPersonal()
    {
        /**solo deuvelve los id y los nombres de los tipos'getIdTipoPersonal
         * y getNombreTipopersonal'*/
        $result = $this->servicePersonal->mostrarTiposPersonal();
        if ($result = null) {
            if ($result == null) {
                return " Error al obtener los datos, no existen datos ..!";
            } else {
                return $result;
            }
        }
    }

    public function  obtnerTipoPersonal($idTipoPersonal)
    {
        /** @var usalo para hacer una busqueda de un tipo persona y poder editarlo */
        $result = $this->servicePersonal->mostrarTipoPersonal($idTipoPersonal);
        if ($result == null) {
            return " Error al obtener los datos, no existen datos ..!";
        } else {
            return $result;
        }
    }

    /**************************** Atencion ********************************/
    public function nuevoTipoAtencion(TipoAtencion $tipoAtencion)
    {
        $result = $this->serviceAtencion->nuevoTipoAtencion($tipoAtencion);
        return $this->respuesta($result);
    }

    public function editarTipoAtencion(TipoAtencion $tipoAtencion)
    {
        $result = $this->serviceAtencion->editarTipoAtencion($tipoAtencion);
        return $this->respuesta($result);
    }

    public  function eliminarTipoAtencion()
    {}

    public function obtenerTiposAtencion()
    {
        /**solo deuvelve los id y los nombres de los tipos'getIdTipoAtencion
         * y getNombreTipoAtencion'*/
        $result = $this->serviceAtencion->mostrarTipoAtencion();
        if ($result == null) {
            return " Error al obtener los datos, no existen datos ..!";
        } else {
            return $result;
        }

    }

    public  function obtenerTipoAtencion($idTipoAtencion)
    {
        $result=$this->serviceAtencion->mostrarTipoAtencionId($idTipoAtencion);
        if ($result == null) {
            return " Error al obtener los datos, no existen datos ..!";
        } else {
            return $result;
        }
    }

    /**************************** Analisis ********************************/

    public function nuevoTipoAnalisis(TipoAnalisis $tipoAnalisis)
    {
        $result=$this->serviceAnalisis->nuevoTipoAnalisis($tipoAnalisis);
        return $this->respuesta($result);
    }

    public function editarTipoAnalisis(TipoAnalisis $tipoAnalisis)
    {
        $result=$this->serviceAnalisis->editarTipoAnalisis($tipoAnalisis);
        return $this->respuesta($result);
    }

    public function eliminarTipoAnalisis($idTipoAnalisis)
    {
        $result=$this->serviceAnalisis->eliminarTipoAnalisis($idTipoAnalisis);
        return $this->respuesta($result);
    }

    public function obtenerTiposAnalisis()
    {
        $result=$this->serviceAnalisis->obetnerTiposAnalisis();
        if ($result == null) {
            return " Error al obtener los datos, no existen datos ..!";
        } else {
            return $result;
        }
    }

    public function obtenerTipoAnalisis($idTipoAnalisis)
    {
        $result=$this->serviceAnalisis->obetnerTipoAnalisis($idTipoAnalisis);
        if ($result == null) {
            return " Error al obtener los datos, no existen datos ..!";
        } else {
            return $result;
        }
    }

}