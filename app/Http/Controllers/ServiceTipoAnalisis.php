<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 9/12/2015
 * Time: 12:37 AM
 */

namespace App\Http\Controllers;

use DB;
use App\Atencion\TipoAnalisis;

class ServiceTipoAnalisis extends controller
{


    /**
     * ServiceTipoAnalisis constructor.
     */
    public function __construct()
    {
    }

    public function nuevoTipoAnalisis(TipoAnalisis $tipoAnalisis)
    {
        try {
            DB::table('tipoanalisis')
                ->insert(['NombreTipoAnalisis' => $tipoAnalisis->getNombre(),
                    'Descripcion' => $tipoAnalisis->getDescripcion()]);
            return true;
        } catch (\mysqli_sql_exception $e) {
            return false;
        }

    }

    public function editarTipoAnalisis(TipoAnalisis $tipoAnalisis)
    {

        try {
            DB::table('TipoAnalisis')->where('IdTipoAnalisis', $tipoAnalisis->getIdTipoAnalisis())
                ->update(['NombreTipoAnalisis' => $tipoAnalisis->getNombre(),
                    'Descripcion' => $tipoAnalisis->getDescripcion()]);
            return true;
        } catch (\mysqli_sql_exception $e) {
            return false;
        }
    }

    public function eliminarTipoAnalisis($idTipoAnalisis)
    {
        Try {
            DB::table('Tipoanalisis')->where(['IdTipoAnalisis'=>$idTipoAnalisis])
                ->update(['Activado'=> 0]);
            return true;
        } catch (\mysqli_sql_exception $e) {
            return false;
        }
    }

    public function obetnerTiposAnalisis()
    {
        $tipos=array();
        try{
            $result=DB::table('TipoAnalisis')->where('Activado',1)-> get();
            for($i=0;$i<count($result);$i++)
            {
                $tipos[$i]=new TipoAnalisis();
                $tipos[$i]->setIdTipoAnalisis($result[$i]->IdTipoAnalisis);
                $tipos[$i]->setNombre($result[$i]->NombreTipoAnalisis);

            }
          return $tipos;

        }catch (\mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function obetnerTipoAnalisis($idTipoAnalisis)
    {
        try{
            $result=DB::table('TipoAnalisis')->where('Activado',1)->
            where(['IdTipoAnalisis'=>$idTipoAnalisis])->first();

                $tipo=new TipoAnalisis();
                $tipo->setIdTipoTratiemnto($result->IdTipoAnalisis);
                $tipo-> setNombre($result->NombreTipoAnalisis);
                $tipo->setDescripcion($result->Descripcion);

            return $tipo;

        }catch (\mysqli_sql_exception $e)
        {
            return null;
        }

    }
}