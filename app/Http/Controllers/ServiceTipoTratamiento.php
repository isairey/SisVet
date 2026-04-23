<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 10/12/2015
 * Time: 1:05 PM
 */

namespace App\Http\Controllers;

use DB;
use App\Atencion\TipoTratamiento;

class ServiceTipoTratamiento extends  controller
{


    /**
     * ServiceTipoTratamiento constructor.
     */
    public function __construct()
    {
    }

    public function nuevoTipoTratamiento(TipoTratamiento $tipoTratamiento)
    {
        try {
            DB::table('tipotratamiento')
                ->insert(['NombreTipoTratamiento' =>
                    $tipoTratamiento->getNombreTipoTratamiento(),
                    'Descripcion' => $tipoTratamiento->getDescripcion()]);
            return true;
        } catch (\mysqli_sql_exception $e) {
            return false;
        }

    }

    public function editarTipoTratamiento(TipoTratamiento $tipoTratamiento)
    {

        try {
            DB::table('tipotratamiento')
                ->where('IdTipoTratamiento', $tipoTratamiento->getIdTipoTratiemnto())
                ->update(['NombreTipoTratamiento' =>
                    $tipoTratamiento->getNombreTipoTratamiento(),
                    'Descripcion' => $tipoTratamiento->getDescripcion()]);
            return true;
        } catch (\mysqli_sql_exception $e) {
            return false;
        }
    }

    public function eliminarTipoTratamiento($idtipoTratamiento)
    {
        Try {
            DB::table('tipotratamiento')
                ->where('IdTipoTratamiento', $idtipoTratamiento)
                ->update(['Activado'=> 0]);
            return true;
        } catch (\mysqli_sql_exception $e) {
            return false;
        }
    }

    public function mostrarTiposTratamiento()
    {
        $tipo=array();
        try{
            $result=DB::table('tipotratamiento')->where(['Activado'=>1])-> get();
            for($i=0;$i<count($result);$i++)
            {
                $tipo[$i]=new TipoTratamiento();
                $tipo[$i]->setIdTipoTratiemnto($result[$i]->IdTipoTratamiento);
                $tipo[$i]->setNombreTipoTratamiento($result[$i]->NombreTipoTratamiento);

            }

            return $tipo;
        }catch (\mysqli_sql_exception $e)
        {
            return null;
        }
    }

    public function mostrarTipoTratamiento($idTipoTratamiento)
    {
        try{
            $result=DB::table('tipotratamiento')->where(['Activado'=>1])->
            where(['IdTipoTratamiento'=>$idTipoTratamiento])->first();

            $tipo=new TipoTratamiento();
            $tipo->setIdTipoTratiemnto($result->IdTipoTratamiento);
            $tipo->setNombreTipoTratamiento($result->NombreTipoTratamiento);
            $tipo->setDescripcion($result->Descripcion);

            return $tipo;

        }catch (\mysqli_sql_exception $e)
        {
            return null;
        }

    }
}