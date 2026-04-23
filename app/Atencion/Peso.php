<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 4/12/2015
 * Time: 12:13 AM
 */

namespace App\Atencion;


class Peso
{
    private $idPeso;
    private $peso;
    private $fechaPeso;
    private $anotacion;
    private $idAnimal;
    private $idPersonal;

    /**
     * Peso constructor.
     * @param $anotacion
     * @param $peso
     * @param $fechaPeso
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getIdPeso()
    {
        return $this->idPeso;
    }

    /**
     * @param mixed $idPeso
     */
    public function setIdPeso($idPeso)
    {
        $this->idPeso = $idPeso;
    }


    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getFechaPeso()
    {
        return $this->fechaPeso;
    }

    /**
     * @param mixed $fechaPeso
     */
    public function setFechaPeso($fechaPeso)
    {
        $this->fechaPeso = $fechaPeso;
    }

    /**
     * @return mixed
     */
    public function getAnotacion()
    {
        return $this->anotacion;
    }

    /**
     * @param mixed $anotacion
     */
    public function setAnotacion($anotacion)
    {
        $this->anotacion = $anotacion;
    }

    /**
     * @return mixed
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }

    /**
     * @param mixed $idAnimal
     */
    public function setIdAnimal($idAnimal)
    {
        $this->idAnimal = $idAnimal;
    }

    /**
     * @return mixed
     */
    public function getIdPersonal()
    {
        return $this->idPersonal;
    }

    /**
     * @param mixed $idPersonal
     */
    public function setIdPersonal($idPersonal)
    {
        $this->idPersonal = $idPersonal;
    }


}