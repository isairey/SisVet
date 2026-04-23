<?php

/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 5/12/2015
 * Time: 3:20 PM
 */
namespace App\Http\Controllers;

use App\Atencion\Patologia;
use Mockery\Exception;
use DB;

class ServicePatologia extends Controller
{

    public function __construct()
    {
    }


    /***Los metodos estan implementados para que devuelvan verdadero o falso
    segun se ejecuten en la base de datos(0 o 1)****/
    public function agregarPatologia(Patologia $patologia)
    {
        try {
            DB::table('patologia')->insert(['NombrePatologia' => $patologia->getNombrePatologia()
                , 'DescripcionPatologia' => $patologia->getDesripcionPatologia()]);
            return true;
        } catch (
        Exception $e
        ) {
            return false;
        }

    }

    public function editarPatologia(Patologia $patologia)
    {
        try {
            DB::table('patologia')->where(['IdPatologia' => $patologia
                ->getIdPatologia()])
                ->update(['NombrePatologia' =>
                    $patologia->getNombrePatologia(),
                    'DescripcionPatologia' =>
                        $patologia->getDesripcionPatologia()
                ]);
            return true;
        } catch (Exception $e) {
            return false;
        }


    }

    public function eliminarPatologia($idPatologia)
    {
        try {
            DB::table('patologia')->where(['IdPatologia' => $idPatologia])->update([
                'Activado' => 0]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * @param $idPatologia
     * @return bool
     */
    public function mostrarNombresPatologias()
    {
        $patologia = array();
        try {
            $result = DB::select('select IdPatologia,NombrePatologia from Patologia
                      WHERE Activado = 1');

            for ($i = 0; $i < count($result); $i++) {
                $patologia[$i] = new Patologia();
                $patologia[$i]->setIdPatologia($result[$i]->IdPatologia);
                $patologia[$i]->setNombrePatologia($result[$i]->NombrePatologia);
            }

            return $patologia;
        } catch (Exception $e) {
            return null;
        }
    }

// devuelve una patologia por su respectivo nombre
    public function mostrarPatologiaPorNombre($nombre)
    {

        $patologia = array();
        try {
            $result = DB::select("SELECT * FROM patologia
                          where NombrePatologia LIKE '%$nombre%'");

            for ($i = 0; $i < count($result); $i++) {
                $patologia[$i] = new Patologia();
                $patologia[$i]->setIdPatologia($result[$i]->IdPatologia);
                $patologia[$i]->setNombrePatologia($result[$i]->NombrePatologia);
                $patologia[$i]->setDesripcionPatologia($result[$i]->DescripcionPatologia);
            }

            return $patologia;
        } catch (Exception $e) {
            return null;
        }
    }

    public function mostrarPatologiaID($idPatologia)
    {

        try {
            $result = DB::table('patologia')->where('IdPatologia', $idPatologia)->first();

            $patologia = New Patologia();
            $patologia->setIdPatologia($result->IdPatologia);
            $patologia->setNombrePatologia($result->NombrePatologia);
            $patologia->setDesripcionPatologia($result->DescripcionPatologia);
            return $patologia;
        } catch (Exception $e) {
            return null;
        }
    }



}