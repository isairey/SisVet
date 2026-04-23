<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 8/12/2015
 * Time: 3:46 PM
 */

namespace App\Http\Controllers;

use App\Atencion\Documento;

use DB;

class ServiceDocumento extends Controller
{


    /**
     * ServiceDocumento constructor.
     */
    public function __construct()
    {
    }

    public function nuevoDocumento(Documento $documento)
    {
        try {
            DB::table('documento')->insert(['TipoDeDocumento' => $documento->getTipoDocumento(),
                'UbicacionDocumento' => $documento->getUbicacionDocunemto(),
                'IdAnimal' => $documento->getIdAnimal(), 'IdPersonal' => $documento->getIdPersonal()]);
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function editarDocumento(Documento $documento)
    {
        try {
            DB::table('documento')->
            where(['IdDocumento' => $documento->getIdDocumento()])
                ->update(['TipoDeDocumento' => $documento->getTipoDocumento(),
                    'UbicacionDocumento' => $documento->getUbicacionDocunemto(),
                    'IdAnimal' => $documento->getIdAnimal(),
                    'IdPersonal' => $documento->getIdPersonal()]);
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function eliminarDocumento($idDocumento)
    {
        try {
            DB::table('documento')->where(['IdDocumento' => $idDocumento])
                ->update(['Activado' => 0]);
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function obtenerDocumentosAnimal($idAnimal)
    {
        $documento = array();
        try {
            $result = DB::table('documento')->where(['IdAnimal' => $idAnimal])
                ->where('Activado', 1)
                ->get();

            for ($i = 0; $i < count($result); $i++) {

                $documento[$i] = new Documento();
                $documento[$i]->setIdDocumento($result[$i]->IdDocumento);
                $documento[$i]->setTipoDocumento($result[$i]->TipoDeDocumento);
                $documento[$i]->setUbicacionDocunemto($result[$i]->UbicacionDocumento);
                $documento[$i]->setIdAnimal($result[$i]->IdAnimal);
                $documento[$i]->setIdPersonal($result[$i]->IdPersonal);

            }
            return $documento;

        } catch (mysqli_sql_exception $e) {
            return null;
        }
    }

    public function obtenerDocumentosPersonal($idPersonal)
    {
        $documento = array();
        try {
            $result = DB::table('documento')->where('IdPersonal', $idPersonal)
                ->where('Activado', 1)->get();

            for ($i = 0; $i < count($result); $i++) {
                $documento[$i] = new Documento();
                $documento[$i]->setIdDocumento($result[$i]->IdDocumento);
                $documento[$i]->setTipoDocumento($result[$i]->TipoDeDocumento);
                $documento[$i]->setUbicacionDocunemto($result[$i]->UbicacionDocumento);
                $documento[$i]->setIdAnimal($result[$i]->IdAnimal);
                $documento[$i]->setIdPersonal($result[$i]->IdPersonal);

            }
            return $documento;

        } catch (mysqli_sql_exception $e) {
            return null;
        }
    }

    public function obtenerDocumento($idDocumento)
    {
        try {
            $result = DB::table('documento')->where('IdDocumento', $idDocumento)
                ->where('Activado', 1)->first();
            $documento = new Documento();
            $documento->setIdDocumento($result->IdDocumento);
            $documento->setTipoDocumento($result->TipoDeDocumento);
            $documento->setUbicacionDocunemto($result->UbicacionDocumento);
            $documento->setIdAnimal($result->IdAnimal);
            $documento->setIdPersonal($result->IdPersonal);
            return $documento;
        } catch (mysqli_sql_exception $e) {
            return null;
        }
    }

}