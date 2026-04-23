<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 5/11/2015
 * Time: 1:10 PM
 */

namespace App;

use App\Http\Controllers\Controller;
class Raza extends controller
{
    public $idRaza;
    public $nombreRaza;
    public $estiloPiel;
    public $idEspecie;


    /**
     * Raza constructor.
     * @param $nombreRaza
     * @param $estiloPiel
     * @param $Especie
     */
    public function __construct($idRaza,$nombreRaza, $estiloPiel,$idEspecie)
    {
        $this->idRaza=$idRaza;
        $this->nombreRaza = $nombreRaza;
        $this->estiloPiel = $estiloPiel;
        $this->Especie =$idEspecie;
    }

    /**
     * @return mixed
     */
    public function getIdRaza()
    {
        return $this->idRaza;
    }

    /**
     * @param mixed $idRaza
     */
    public function setIdRaza($idRaza)
    {
        $this->idRaza = $idRaza;
    }

    /**
     * @return mixed
     */
    public function getIdEspecie()
    {
        return $this->idEspecie;
    }

    /**
     * @param mixed $idEspecie
     */
    public function setIdEspecie($idEspecie)
    {
        $this->idEspecie = $idEspecie;
    }

    /**
     * @return mixed
     */
    public function getNombreRaza()
    {
        return $this->nombreRaza;
    }

    /**
     * @param mixed $nombreRaza
     */
    public function setNombreRaza($nombreRaza)
    {
        $this->nombreRaza = $nombreRaza;
    }

    /**
     * @return mixed
     */
    public function getEstiloPiel()
    {
        return $this->estiloPiel;
    }

    /**
     * @param mixed $estiloPiel
     */
    public function setEstiloPiel($estiloPiel)
    {
        $this->estiloPiel = $estiloPiel;
    }



}