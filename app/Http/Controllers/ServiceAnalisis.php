<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 10/12/2015
 * Time: 11:34 AM
 */

namespace App\Http\Controllers;
use DB;

use App\Atencion\Analisis;

class ServiceAnalisis extends controller
{

    /**
     * ServiceAnalisis constructor.
     */
    public function __construct()
    {
    }

    public function nuevoAnalisis(Analisis $analisis)
    {
        try {
            DB::table('analisis')->insert(['UbicacionAnalisis' => $analisis->getUbicacion(),
                'FechaAnalisis' => $analisis->getFechaAnalisis(),
                'IdAnimal' => $analisis->getIdAnimal(), 'IdTipoAnalisis' => $analisis->getIdTipoAnalisis()
                , 'IdPersonal' => $analisis->getIdPersonal()
            ]);
            return true;
        } catch (\mysqli_sql_exception $e) {
            return false;
        }
    }

    public function editarAnalisis(Analisis $analisis)
    {
        try {
            DB::table('analisis')->where('IdAnalisis', $analisis->getIdAnalisis())
                ->update
            (['UbicacionAnalisis' => $analisis->getUbicacion(),
                'FechaAnalisis' => $analisis->getFechaAnalisis(),
                'IdAnimal' => $analisis->getIdAnimal(),
                'IdTipoAnalisis' => $analisis->getIdTipoAnalisis()
                , 'IdPersonal' => $analisis->getIdPersonal()
            ]);
            return true;
        } catch (\mysqli_sql_exception $e) {
            return false;
        }
    }

    public function eliminarAnalisis($idAnalisis)
    {
        try {
            DB::table('analisis')
                ->where(['IdAnalisis' => $idAnalisis])
                ->update(['Activado' => 0]);
        } catch (\mysqli_sql_exception $e) {
            return false;
        }
    }

    public function obtenerAnalisisDeAnimal($idAnimal)
    {
        $analisis = array();
        try {
            $result = DB::table('analisis')
                ->where(['IdAnimal' => $idAnimal])
                ->where(['Activado'=>1])
                ->get();
            for ($i = 0; $i < count($result); $i++) {
                $analisis[$i] = new Analisis();
                $analisis[$i]->setIdAnalisis($result[$i]->IdAnalisis);
                $analisis[$i]->setUbicacion($result[$i]->UbicacionAnalisis);
                $analisis[$i]->setFechaAnalisis($result[$i]->FechaAnalisis);
                $analisis[$i]->setIdAnimal($result[$i]->IdAnimal);
                $analisis[$i]->setIdTipoAnalisis($result[$i]->IdTipoAnalisis);
                $analisis[$i]->setIdPersonal($result[$i]->IdPersonal);
            }

            return $analisis;

        } catch (\mysqli_sql_exception $e) {
            return false;
        }
    }

    public function obtenerAnalisisPersonal($idPersonal)
    {
        $analisis = array();
        try {
            $result = DB::table('analisis')
                ->where(['IdPersonal' => $idPersonal])
                ->where('Activado',1)
                ->get();
            for ($i = 0; $i < count($result); $i++) {
                $analisis[$i] = new Analisis();
                $analisis[$i]->setIdAnalisis($result[$i]->IdAnalisis);
                $analisis[$i]->setUbicacion($result[$i]->UbicacionAnalisis);
                $analisis[$i]->setFechaAnalisis($result[$i]->FechaAnalisis);
                $analisis[$i]->setIdAnimal($result[$i]->IdAnimal);
                $analisis[$i]->setIdTipoAnalisis($result[$i]->IdTipoAnalisis);
                $analisis[$i]->setIdPersonal($result[$i]->IdPersonal);
            }

            return $analisis;

        } catch (\mysqli_sql_exception $e) {
            return false;
        }
    }

    public function obtenerAnalisis($idAnimal, $fechaAnalisis)
    {
        try {
            $result = DB::table('analisis')
                ->where(['IdAnimal' => $idAnimal])
                ->where(['FechaAnalisis' => $fechaAnalisis])
                ->first();

            $analisis = new Analisis();
            $analisis->setIdAnalisis($result->IdAnalisis);
            $analisis->setUbicacion($result->UbicacionAnalisis);
            $analisis->setFechaAnalisis($result->FechaAnalisis);
            $analisis->setIdAnimal($result->IdAnimal);
            $analisis->setIdTipoAnalisis($result->IdTipoAnalisis);
            $analisis->setIdPersonal($result->IdPersonal);

            return $analisis;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}