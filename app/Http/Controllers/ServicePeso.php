<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 21/12/2015
 * Time: 6:13 PM
 */

namespace App\Http\Controllers;


use App\Atencion\Peso;

class ServicePeso
{
    public function __construct()
    {
    }

    public function  agregarPeso(Peso $peso)
    {
        try {
            DB::table('peso')
                ->insert
                (['Peso' => $peso->getPeso(),
                    'FechaPeso' => $peso->getFechaPeso(),
                    'Anotacion' => $peso->getAnotacion(),
                    'IdAnimal' => $peso->getIdAnimal(),
                    'IdPersonal' => $peso->getIdPersonal(),
                ]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function  editarPeso(Peso $peso)
    {
        try {
            DB::table('peso')->where(['IdPeso' => $peso->getIdPeso()])
                ->update
                (['Peso' => $peso->getPeso(),
                    'FechaPeso' => $peso->getFechaPeso(),
                    'Anotacion' => $peso->getAnotacion(),
                    'IdAnimal' => $peso->getIdAnimal(),
                    'IdPersonal' => $peso->getIdPersonal(),
                ]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function  eliminarPeso(Peso $peso)
    {
        try {
            DB::table('peso')->where(['IdPeso' => $peso->getIdPeso()])
                ->update
                (['Activado' => 0
                ]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function obtenerPesosAnimal($idAnimal)
    {
        $peso = array();
        try {
            $result = DB::table('peso')->where(['Activado'=>1])->where(['IdAnimal' => $idAnimal])->get();
            for ($i = 0; $i < count($result); $i++) {
                $peso[$i] = new Peso();
                $peso[$i]->setIdPeso($result[$i]->IdPeso);
                $peso[$i]->setPeso($result[$i]->Peso);
                $peso[$i]->setFechaPeso($result[$i]->FechaPeso);
                $peso[$i]->setAnotacion($result[$i]->Anotacion);
                $peso[$i]->setIdAnimal($result[$i]->IdAnimal);
                $peso[$i]->setIdPersonal($result[$i]->IdPersonal);
            }
            return $peso;
        } catch (\Exception $e) {
            return false;
        }
    }
    public function obtenerPesosAnimalPesonal($idPersonal)
    {
        $peso = array();
        try {
            $result = DB::table('peso')->where(['Activado'=>1])->where(['IdAnimal' => $idPersonal])->get();
            for ($i = 0; $i < count($result); $i++) {
                $peso[$i] = new Peso();
                $peso[$i]->setIdPeso($result[$i]->IdPeso);
                $peso[$i]->setPeso($result[$i]->Peso);
                $peso[$i]->setFechaPeso($result[$i]->FechaPeso);
                $peso[$i]->setAnotacion($result[$i]->Anotacion);
                $peso[$i]->setIdAnimal($result[$i]->IdAnimal);
                $peso[$i]->setIdPersonal($result[$i]->IdPersonal);
            }
            return $peso;
        } catch (\Exception $e) {
            return false;
        }
    }
}