<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 23/12/2015
 * Time: 5:48 PM
 */

namespace App\Http\Controllers;

use App\Atencion\Documento;
use App\Atencion\Log;

class ControlDocumento extends Controller
{
    private $serviceDocumento;
    private $serviceLog;

    public function __construct()
    {
        $this->serviceDocumento = new ServiceDocumento();
        $this->serviceLog = new ServiceLog();
    }


    public function agregarLog($idAnimal, $nombre, $descripcion)
    {

        $log = new Log();
        $log->setIdAnimal($idAnimal);
        $log->setTipoLog($nombre);
        $log->setDescripcion($descripcion);
        $this->serviceLog->nuevoLog($log);
    }

    public function nuevoDocumento(Documento $documento)
    {
        $result = $this->serviceDocumento->nuevoDocumento($documento);
        if ($result) {
            $log = new Log();
            $log->setIdAnimal($documento->getIdAnimal());
            $log->setTipoLog('Documento');
            $log->setDescripcion('Documento aderido cone xitocon exito');
            $this->serviceLog->nuevoLog($log);

            return 'Atencion creada con exito';
        } else {
            return 'Error al crear atencion, intentelo nuevamente';
        }
    }

    public function editarDocumento(Documento $documento)
    {
        $result = $this->serviceDocumento->editarDocumento($documento);
        if ($result) {
            return "Documento agregado conexito";
        } else {
            return "problemas en el registro, error en el ingreso de datos";
        }
    }

    public function eliminarDocumento($idDocumento)
    {
        $result = $this->serviceDocumento->eliminarDocumento($idDocumento);
        if ($result) {
            return 'El documento fue  eliminado';
        } else {
            return 'documeto no fue eliminado intentelo nuevamente';
        }

    }

    public function mostrarDocumentos($idAnimal)
    {
        $result = $this->serviceDocumento->obtenerDocumentosAnimal($idAnimal);
        if ($result == null) {
            echo 'No se econtro datos..';
        } else {
            return $result;
        }
    }

    public function mostrarDocumento($idDocumento)
    {
        $result = $this->serviceDocumento->obtenerDocumento($idDocumento);
        if ($result == null) {
            echo 'No se econtro datos..';
        } else {
            return $result;
        }

    }
}