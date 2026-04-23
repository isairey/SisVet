<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 8/12/2015
 * Time: 6:04 PM
 */

namespace App\Http\Controllers;

use App\Atencion\Log;
use DB;

class ServiceLog extends Controller
{


    /**
     * ServiceLog constructor.
     */
    public function __construct()
    {
    }

    public function nuevoLog(Log $log)
    {

        try {
            $fecha = strftime("%Y-%m-%d", time());
            $log->setFechaLog($fecha );
            DB::table('log')->insert(['FechaLog' => $log->getFechaLog(),
                'TipoLog' => $log->getTipoLog(),
                'DescripcionLog' => $log->getDescripcion(),
                'IdAnimal' => $log->getIdAnimal()]);
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function editarLog(Log $log)
    {
        try {
            DB::table('log')->where(['IdLog' => $log->getIdLog()])
                ->update(['FechaLog' => $log->getFechaLog(),
                    'TipoLog' => $log->getTipoLog()
                    , 'DescripcionLog' => $log->getDescripcion(),
                    'IdAnimal' => $log->getIdAnimal()]);
            return true;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }

    public function eliminarLog($idLog)
    {
        try {
            DB::table('log')->where(['IdLog' => $idLog])->
            update(['Activado' => 0]);
            return true;
        } catch (Exception $e) {
            return false;
        }

    }

    public function mostrarLogAnimal($idAnimal)
    {
        $log = array();
        try {
            $result = DB::table('log')->where('IdAnimal', $idAnimal)
                ->where('Activado', 1)->get();
            for ($i = 0; $i < count($result); $i++) {
                $log[$i] = new Log();
                $log[$i]->setIdLog($result[$i]->IdLog);
                $log[$i]->setFechaLog($result[$i]->FechaLog);
                $log[$i]->setTipoLog($result[$i]->TipoLog);
                $log[$i]->setDescripcion($result[$i]->DescripcionLog);
                $log[$i]->setIdAnimal($result[$i]->IdAnimal);
            }

            return $log;

        } catch (Exception $e) {
            return null;
        }
    }

    public function mostrarTodosLog()
    {
        $log = array();
        try {
            $result = DB::table('log')
                ->where('Activado', 1)->get();
            for ($i = 0; $i < count($result); $i++) {
                $log[$i] = new Log();
                $log[$i]->setIdLog($result[$i]->IdLog);
                $log[$i]->setFechaLog($result[$i]->FechaLog);
                $log[$i]->setTipoLog($result[$i]->TipoLog);
                $log[$i]->setDescripcion($result[$i]->DescripcionLog);
                $log[$i]->setIdAnimal($result[$i]->IdAnimal);
            }

            return $log;

        } catch (Exception $e) {
            return null;
        }

    }

}