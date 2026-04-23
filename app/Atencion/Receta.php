<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 4/12/2015
 * Time: 12:26 AM
 */

namespace App\Atencion;


class Receta
{
    private $idReceta;
    private $descripcion;
    private $fechaReceta;
    private $idAnimal;
    private $idPersonal;

    /**
     * Receta constructor.
     * @param $descripcion
     * @param $fechaReceta
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getIdReceta()
    {
        return $this->idReceta;
    }

    /**
     * @param mixed $idReceta
     */
    public function setIdReceta($idReceta)
    {
        $this->idReceta = $idReceta;
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
    public function getFechaReceta()
    {
        return $this->fechaReceta;
    }

    /**
     * @param mixed $fechaReceta
     */
    public function setFechaReceta($fechaReceta)
    {
        $this->fechaReceta = $fechaReceta;
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