<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 14/12/2015
 * Time: 3:45 PM
 */

namespace App\Http\Controllers;


use App\Atencion\Atencion;
use DB;
class ServiceAtencion
{

    public function __construct()
    {

    }

    public function nuevaAtencion(Atencion $atencion)
    {
        try {
            DB::table('atencion')
                ->insert(['ResumenAtencion' => $atencion->getResumen(),
                    'DescripcionAtencion' => $atencion->getDescripcion(),
                    'FechaAtencion' => $atencion->getFechaAtencion(),
                    'IdAnimal' => $atencion->getIdAnimal(),
                    'IdPersonal' => $atencion->getIdPersonal(),
                    'IdTipoAtencion' => $atencion->getIdTipoAtencion()]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function editarAtencion(Atencion $atencion)
    {
        try {
            DB::table('atencion')
                ->where('Activado',1)
                ->where('IdAtencion', $atencion->getIdAtencion())
                ->update(['ResumenAtencion' => $atencion->getResumen(),
                    'DescripcionAtencion' => $atencion->getDescripcion(),
                    'FechaAtencion' => $atencion->getFechaAtencion(),
                    'IdAnimal' => $atencion->getIdAnimal(),
                    'IdPersonal' => $atencion->getIdPersonal(),
                    'IdTipoAtencion' => $atencion->getIdTipoAtencion()]);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function eliminarAtencion($atencion)
    {
        try {
            DB::table('atencion')
                ->where('IdAtencion', $atencion)
                ->update(['Activado' => 0]);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function obtenerAtenciones()
    {
        $atencion = array();
        try {
            $result = DB::table('atencion')
                ->where('Activado',1)
                ->get();
            for ($i = 0; $i < count($result); $i++) {
                $atencion[$i] = new Atencion();
                $atencion[$i]->setIdAtencion($result[$i]->IdAtencion);
                $atencion[$i]->setResumen($result[$i]->ResumenAtencion);
                $atencion[$i]->setDescripcion($result[$i]->DescripcionAtencion);
                $atencion[$i]->setFechaAtencion($result[$i]->FechaAtencion);
                $atencion[$i]->setIdAnimal($result[$i]->IdAnimal);
                $atencion[$i]->setIdPersonal($result[$i]->IdPersonal);
                $atencion[$i]->setIdTipoAtencion($result[$i]->IdTipoAtencion);
            }

            return $atencion;
        } catch (\Exception $e) {
            return null;
        }
    }

    public function obtenerAtencionesAnimal($idAnimal)
    {
        $atencion = array();
        try {
            $result = DB::table('atencion')
                ->where('IdAnimal',$idAnimal)
                ->where('Activado',1)
                ->get();
            for ($i = 0; $i < count($result); $i++) {
                $atencion[$i] = new Atencion();
                $atencion[$i]->setIdAtencion($result[$i]->IdAtencion);
                $atencion[$i]->setResumen($result[$i]->ResumenAtencion);
                $atencion[$i]->setDescripcion($result[$i]->DescripcionAtencion);
                $atencion[$i]->setFechaAtencion($result[$i]->FechaAtencion);
                $atencion[$i]->setIdAnimal($result[$i]->IdAnimal);
                $atencion[$i]->setIdPersonal($result[$i]->IdPersonal);
                $atencion[$i]->setIdTipoAtencion($result[$i]->IdTipoAtencion);
            }

            return $atencion;
        } catch (\Exception $e) {
            return null;
        }
    }
    public function obtenerAtencionesPersonal($idPersonal)
    {
        $atencion = array();
        try {
            $result = DB::table('atencion')
                ->where('IdPersonal',$idPersonal)
                ->where('Activado',1)
                ->get();
            for ($i = 0; $i < count($result); $i++) {
                $atencion[$i] = new Atencion();
                $atencion[$i]->setIdAtencion($result[$i]->IdAtencion);
                $atencion[$i]->setResumen($result[$i]->ResumenAtencion);
                $atencion[$i]->setDescripcion($result[$i]->DescripcionAtencion);
                $atencion[$i]->setFechaAtencion($result[$i]->FechaAtencion);
                $atencion[$i]->setIdAnimal($result[$i]->IdAnimal);
                $atencion[$i]->setIdPersonal($result[$i]->IdPersonal);
                $atencion[$i]->setIdTipoAtencion($result[$i]->IdTipoAtencion);
            }

            return $atencion;
        } catch (\Exception $e) {
            return null;
        }
    }


    public function obtenerAtencion($idAtencion)
    {
        try {
            $result = DB::table('atencion')
                ->where('IdAtencion', $idAtencion)
                ->where('Activado',1)
                ->get();
            $atencion = new Atencion();
            $atencion->setIdAtencion($result->IdAtencion);
            $atencion->setResumen($result->ResumenAtencion);
            $atencion->setDescripcion($result->DescripcionAtencion);
            $atencion->setFechaAtencion($result->FechaAtencion);
            $atencion->setIdAnimal($result->IdAnimal);
            $atencion->setIdPersonal($result->IdPersonal);
            $atencion->setIdTipoAtencion($result->IdTipoAtencion);


            return $atencion;
        } catch (\Exception $e) {
            return null;
        }
    }

}