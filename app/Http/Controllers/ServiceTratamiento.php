<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 11/12/2015
 * Time: 2:43 PM
 */

namespace App\Http\Controllers;

use DB;
use App\Atencion\Tratamiento;
use Mockery\CountValidator\Exception;

class ServiceTratamiento
{


    /**
     * ServiceTratamiento constructor.
     */
    public function __construct()
    {

    }

    public function nuevoTratamiento(Tratamiento $tratamiento)
    {
        try {
            DB::table('tratamiento')->
            insert(['FechaProgramacion' => $tratamiento->getFechaProgramacion(),
                'FechaAplicacion' => $tratamiento->getFechaAplicacion(),
                'Lote' => $tratamiento->getLote(),
                'FechaAtencion' => $tratamiento->getFechaAtencion(),
                'Laboratorio' => $tratamiento->getLaboratorio(),
                'IdTipoTratamiento' => $tratamiento->getIdTipoTratamiento(),
                'IdAnimal' => $tratamiento->getIdAnimal(),
                'IdPersonal' => $tratamiento->getIdPersonal()
            ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function editarTratamiento(Tratamiento $tratamiento)
    {
        try {
            DB::table('tratamiento')->
            where(['IdTratamiento' => $tratamiento->getIdTratamiento()])->
            update(['FechaProgramacion' => $tratamiento->getFechaProgramacion(),
                'FechaAplicacion' => $tratamiento->getFechaAplicacion(),
                'Lote' => $tratamiento->getLote(),
                'FechaAtencion' => $tratamiento->getFechaAtencion(),
                'Laboratorio' => $tratamiento->getLaboratorio(),
                'IdTipoTratamiento' => $tratamiento->getIdTipoTratamiento(),
                'IdAnimal' => $tratamiento->getIdAnimal(),
                'IdPersonal' => $tratamiento->getIdPersonal()

            ]);
            return true;
        } catch (Exception $e) {

            return false;
        }

    }

    public function  editarFechaAplicacion($idTratamiento, $fechaAplicacion)
    {
        try {
            DB::table('tratamiento')->
            where(['IdTratamiento' => $idTratamiento])
                ->where('Activado', 1)->
                update(['FechaAplicacion' => $fechaAplicacion,
                    'Estado' => 1
                ]);
            return true;
        } catch (Exception $e) {

            return false;
        }
    }
    public function editarFechaProgramacion($idTratamiento,$fechaProgramacion)
    {
        try {
            DB::table('tratamiento')->
            where(['IdTratamiento' => $idTratamiento])
                ->where('Activado', 1)->
                update(['FechaProgramacion' => $fechaProgramacion
                ]);
            return true;
        } catch (Exception $e) {

            return false;
        }
    }

    public function buscarTratamientosContinuos($fechaAtencion,$idAnimal)
    {
        $tratamiento = array();
        try {
            $result = DB::table('tratamiento')->where('IdAnimal', $idAnimal)
                ->where('FechaAtencion', $fechaAtencion)
                ->where('Activado', 1)
                ->where('Estado',0)
                ->get();
            for ($i = 0; $i < count($result); $i++) {
                $tratamiento[$i] = new Tratamiento();
                $tratamiento[$i]->setIdTratamiento($result[$i]->IdTratamiento);
                $tratamiento[$i]->setFechaProgramacion($result[$i]->FechaProgramacion);
                $tratamiento[$i]->setFechaAplicacion($result[$i]->FechaAplicacion);
                $tratamiento[$i]->setLote($result[$i]->Lote);
                $tratamiento[$i]->setFechaAtencion($result[$i]->FechaAtencion);
                $tratamiento[$i]->setLaboratorio($result[$i]->Laboratorio);
                $tratamiento[$i]->setIdTipoTratamiento($result[$i]->IdTipoTratamiento);
                $tratamiento[$i]->setIdAnimal($result[$i]->IdAnimal);
                $tratamiento[$i]->setIdPersonal($result[$i]->IdPersonal);
            }
            return $tratamiento;
        } catch (Exception $e) {
            return null;
        }
    }

    public function eliminarTramiento($idTratamiento)
    {
        try {
            DB::table('tratamiento')->
            where(['IdTratamiento' => $idTratamiento])->

            update(['Activado' => 0
            ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function obtenerTratamientoAnimal($idAnimal, $fechaProgramacion)
    {
        $tratamiento = array();
        try {
            $result = DB::table('tratamiento')->where('IdAnimal', $idAnimal)
                ->where('FechaProgramacion', $fechaProgramacion)
                ->where('Activado', 1)
                ->get();
            for ($i = 0; $i < count($result); $i++) {
                $tratamiento[$i] = new Tratamiento();
                $tratamiento[$i]->setIdTratamiento($result[$i]->IdTratamiento);
                $tratamiento[$i]->setFechaProgramacion($result[$i]->FechaProgramacion);
                $tratamiento[$i]->setFechaAplicacion($result[$i]->FechaAplicacion);
                $tratamiento[$i]->setLote($result[$i]->Lote);
                $tratamiento[$i]->setFechaAtencion($result[$i]->FechaAtencion);
                $tratamiento[$i]->setLaboratorio($result[$i]->Laboratorio);
                $tratamiento[$i]->setIdTipoTratamiento($result[$i]->IdTipoTratamiento);
                $tratamiento[$i]->setIdAnimal($result[$i]->IdAnimal);
                $tratamiento[$i]->setIdPersonal($result[$i]->IdPersonal);
                $tratamiento[$i]-> setEstado($result[$i]->Estado);
            }
            return $tratamiento;
        } catch (Exception $e) {
            return null;
        }
    }


    public function obtenerTratamiento($idTratamiento)
    {

        try {
            $result = DB::table('tratamiento')
                ->where('IdTratamiento', $idTratamiento)
                ->where('Activado', 1)
                ->first();

            $tratamiento = new Tratamiento();
            $tratamiento->setIdTratamiento($result->IdTratamiento);
            $tratamiento->setFechaProgramacion($result->FechaProgramacion);
            $tratamiento->setFechaAplicacion($result->FechaAplicacion);
            $tratamiento->setLote($result->Lote);
            $tratamiento->setFechaAtencion($result->FechaAtencion);
            $tratamiento->setLaboratorio($result->Laboratorio);
            $tratamiento->setIdTipoTratamiento($result->IdTipoTratamiento);
            $tratamiento->setIdAnimal($result->IdAnimal);
            $tratamiento->setIdPersonal($result->IdPersonal);
            $tratamiento-> setEstado($result->Estado);
            return $tratamiento;

        } catch (Exception $e) {
            return false;
        }
    }

    public function obtenerTratamientos()
    {
        $tratamiento = array();
        try {
            $result = DB::table('tratamiento')
                ->where('Activado', 1)
                ->get();
            for ($i = 0; $i < count($result); $i++) {
                $tratamiento[$i] = new Tratamiento();
                $tratamiento[$i]->setIdTratamiento($result[$i]->IdTratamiento);
                $tratamiento[$i]->setFechaProgramacion($result[$i]->FechaProgramacion);
                $tratamiento[$i]->setFechaAplicacion($result[$i]->FechaAplicacion);
                $tratamiento[$i]->setLote($result[$i]->Lote);
                $tratamiento[$i]->setFechaAtencion($result[$i]->FechaAtencion);
                $tratamiento[$i]->setLaboratorio($result[$i]->Laboratorio);
                $tratamiento[$i]->setIdTipoTratamiento($result[$i]->IdTipoTratamiento);
                $tratamiento[$i]->setIdAnimal($result[$i]->IdAnimal);
                $tratamiento[$i]->setIdPersonal($result[$i]->IdPersonal);
            }
            return $tratamiento;
        } catch (Exception $e) {
            return false;
        }

    }

}