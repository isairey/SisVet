<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 8/12/2015
 * Time: 1:42 AM
 */

namespace App\Http\Controllers;

use App\Atencion\Apunte;
use DB;

class ServiceApunte extends Controller
{

    /**
     * ServiceApunte constructor.
     */
    public function __construct()
    {
    }

    public function nuevoApunte(Apunte $apunte)
    {
        try {
            DB::table('apunte')
                ->insert(['FechaApunte' => $apunte->getFechaApunte(),
                    'Descripcion' => $apunte->getDescripcion(),
                    'IdAnimal' => $apunte->getIdAnimal(),
                    'IdPersonal' => $apunte->getIdPersonal()
                ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function editarApunte(Apunte $apunte)
    {
        try {
            DB::table('apunte')
                ->where(['IdApunte' => $apunte->getIdApunte()])->update
                (['FechaApunte' => $apunte->getFechaApunte(),
                    'Descripcion' => $apunte->getDescripcion(),
                    'IdAnimal' => $apunte->getIdAnimal(),
                    'IdPersonal' => $apunte->getIdPersonal()
                ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function eliminarApunte($idApunte)
    {
        try {
            DB::table('apunte')
                ->where('IdApunte', $idApunte)
                ->update(['Activado' => 0]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function obtenerApuntesPersonal($idPersonal)
    {
        $apunte=array();
        try {
            $array=DB::table('apunte')
                ->where('IdAnimal',$idPersonal)->get();
            for($i=0;$i<count($array);$i++)
            {
                $apunte[$i]=new Apunte();
                $apunte[$i]->setIdApunte($array[$i]->IdApunte);
                $apunte[$i]->setFechaApunte($array[$i]->FechaApunte);
                $apunte[$i]->setDescripcion($array[$i]->Descripcion);
                $apunte[$i]->setIdAnimal($array[$i]->IdAnimal);
                $apunte[$i]->setIdPersonal($array[$i]->IdPersonal);
            }
            return $apunte;

        } catch (Exception $e) {
            return null;
        }
    }
    public function obtenerApuntesAnimal($idAnimal)
    {
        $apunte=array();
        try {
            $array=DB::table('apunte')
                ->where('IdAnimal',$idAnimal)->get();
            for($i=0;$i<count($array);$i++)
            {
                $apunte[$i]=new Apunte();
                $apunte[$i]->setIdApunte($array[$i]->IdApunte);
                $apunte[$i]->setFechaApunte($array[$i]->FechaApunte);
                $apunte[$i]->setDescripcion($array[$i]->Descripcion);
                $apunte[$i]->setIdAnimal($array[$i]->IdAnimal);
                $apunte[$i]->setIdPersonal($array[$i]->IdPersonal);
            }
            return $apunte;

        } catch (Exception $e) {
            return null;
        }
    }

    public function obtenerApuntesFecha($idAnimal,$fechaApunte)
    {

        try {
            $array=DB::table('apunte')
                ->where('IdAnimal',$idAnimal)
                ->where('FechaApunte',$fechaApunte)
                ->first();

                $apunte=new Apunte();
               $apunte->setIdApunte($array->IdApunte);
                $apunte->setFechaApunte($array->FechaApunte);
                $apunte->setDescripcion($array->Descripcion);
                $apunte->setIdAnimal($array->IdAnimal);
                $apunte->setIdPersonal($array->IdPersonal);

            return $apunte;
        } catch (mysqli_sql_exception $e) {
            return $e;
        }
    }




}