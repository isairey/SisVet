<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 14/12/2015
 * Time: 3:04 PM
 */

namespace App\Http\Controllers;


use App\Atencion\TipoAtencion;
use DB;

class ServiceTipoAtencion
{
    /**
     * ServiceTipoPersonal constructor.
     */
    public function __construct()
    {
    }

    public function nuevoTipoAtencion(TipoAtencion $tipoAtencion)
    {
        try {
            DB::table('tipoatencion')
                ->insert([
                    'NombreTipoAtencion' => $tipoAtencion->getNombre(),
                    'Descripcion' => $tipoAtencion->getDescripcion()
                ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function editarTipoAtencion(TipoAtencion $tipoAtencion)
    {
        try {
            DB::table('tipoatencion')
                ->where('IdTipoAtencion', $tipoAtencion->getIdTipoAtencion())
                ->update([
                    'NombreTipoAtencion' => $tipoAtencion->getNombre(),
                    'Descripcion' => $tipoAtencion->getDescripcion()
                ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function eliminarTipoAtencion($idTipoAtencion)
    {
        try {
            DB::table('tipoatencion')->where('IdTipoAtencion', $idTipoAtencion)
                ->update(['Activado' => 0]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function mostrarTipoAtencion()
    {
        $tipoAtencion = array();
        try {
            $result = DB::table('tipoatencion')->
            where(['Activado' => 1])
                ->get();
            for ($i = 0; $i < count($result); $i++) {
                $tipoAtencion[$i] = new TipoAtencion();
                $tipoAtencion[$i]->setIdTipoAtencion($result[$i]->IdTipoAtencion);
                $tipoAtencion[$i]->setNombre($result[$i]->NombreTipoAtencion);
            }
            return $tipoAtencion;
        } catch (Exception $e) {
            return null;
        }
    }

    // muestra la atencion buscado por el tipo

    public function  mostrarTipoAtencionId($idTipoAtencion)
    {
        try {
            $result = DB::table('tipoatencion')
                ->where('IdTipoAtencion',$idTipoAtencion)
                ->where(['Activado' => 1])
                ->first();
            $tipoAtencion = new TipoAtencion();
            $tipoAtencion->setIdTipoAtencion($result->IdTipoAtencion);
            $tipoAtencion->setNombre($result->NombreTipoAtencion);
            $tipoAtencion->setDescripcion($result->Descripcion);
            return $tipoAtencion;
        } catch (Exception $e) {
        }
    }
}