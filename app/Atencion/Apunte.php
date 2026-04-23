<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 4/12/2015
 * Time: 12:24 AM
 */

namespace App\Atencion;


class Apunte
{
    private $idApunte;
    private $fechaApunte;
    private $descripcion;
    private $idAnimal;
    private $idPersonal;

    /**
     * Apunte constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return mixed
     */
    public function getIdApunte()
    {
        return $this->idApunte;
    }

    /**
     * @param mixed $idApunte
     */
    public function setIdApunte($idApunte)
    {
        $this->idApunte = $idApunte;
    }

    /**
     * @return mixed
     */
    public function getFechaApunte()
    {
        return $this->fechaApunte;
    }

    /**
     * @param mixed $fechaApunte
     */
    public function setFechaApunte($fechaApunte)
    {
        $this->fechaApunte = $fechaApunte;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
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