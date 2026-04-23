<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 14/12/2015
 * Time: 4:01 PM
 */

namespace App\Http\Controllers;

use DB;
use App\Atencion\Retorno;

class ServiceRetorno extends Controller
{
    public function __construct()
    {
    }

    public function nuevoRetorno(Retorno $retorno)
    {
        try {

            DB::table('retorno')
                ->insert(['FechaRetorno' =>
                    $retorno->getFechaRetorno(),
                    'HoraRetorno' => $retorno->getHoraRetorno(),
                    'ObservacionRetorno' => $retorno->getObservacion(),
                    'IdAtencion' => $retorno->getIdAtencion(),
                    'IdTipoAtencion' => $retorno->getIdTipoAtencion()]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function  editarRetorno(Retorno $retorno)
    {
        try {

            DB::table('retorno')
                ->where(['IdRetorno' =>
                $retorno->getIdRetorno()])
                ->update(['FechaRetorno' => $retorno->getFechaRetorno(),
                    'HoraRetorno' => $retorno->getHoraRetorno(),
                    'ObservacionRetorno' => $retorno->getObservacion(),
                    'IdAtencion' => $retorno->getIdAtencion(),
                    'IdTipoAtencion' => $retorno->getIdTipoAtencion()
                ]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function eliminarRetorno($idAtencion)
    {
        try {

            DB::table('retorno')->where(['IdAtencion' => $idAtencion])
                ->update(['Activado' => 0]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function obtenerRetornos()
    {
        $retorno = array();
        try {
            $result = DB::table('retorno')->where(['Activado' => 1])->get();
            for ($i = 0; $i < count($result); $i++) {
                $retorno[$i] = new Retorno();
                $retorno[$i]->setIdRetorno($retorno[$i]->IdRetorno);
                $retorno[$i]->setFechaRetorno($retorno[$i]->FechaRetorno);
                $retorno[$i]->setHoraRetorno($retorno[$i]->HoraRetorno);
                $retorno[$i]->setObservacion($retorno[$i]->ObservacionRetorno);
                $retorno[$i]->setIdAtencion($retorno[$i]->IdAtencion);
            }
        } catch (\Exception $e) {
            return false;
        }
    }
    public function obtenerRetorno($idRetorno)
    {

        try {
            $result = DB::table('retorno')
                ->where('IdRetorno',$idRetorno)
                ->where(['Activado' => 1])->get();
            $retorno = new Retorno();
            $retorno->setIdRetorno($result->IdRetorno);
            $retorno->setFechaRetorno($result->FechaRetorno);
            $retorno->setHoraRetorno($result->HoraRetorno);
            $retorno->setObservacion($result->ObservacionRetorno);
            $retorno->setIdAtencion($result->IdAtencion);
            return $retorno;
        } catch (\Exception $e) {
            return null;
        }
    }

    public function obetnerRetornoAtencion($idAtencion)
    {
        try {
            $result = DB::table('retorno')->where(['Activado' => 1])
                ->where(['IdAtencion' => $idAtencion])->first();
            $retorno = new Retorno();
            $retorno->setIdRetorno($result->IdRetorno);
            $retorno->setFechaRetorno($result->FechaRetorno);
            $retorno->setHoraRetorno($result->HoraRetorno);
            $retorno->setObservacion($result->ObservacionRetorno);
            $retorno->setIdAtencion($result->IdAtencion);
            return $retorno;

        } catch (\Exception $e) {
            return null;
        }
    }


}