<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 3/12/2015
 * Time: 11:20 PM
 */

namespace App\Atencion;

class Atencion
{
    private $idAtencion;
    private $resumen;
    private $descripcion;
    private $fechaAtencion;
    private $idAnimal;
    private $idPersonal;
    private $idTipoAtencion;

    /**
     * Atencion constructor.
     * @param $resumen
     * @param $descripcion
     * @param $fechaAtencion
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getIdAtencion()
    {
        return $this->idAtencion;
    }

    /**
     * @param mixed $idAtencion
     */
    public function setIdAtencion($idAtencion)
    {
        $this->idAtencion = $idAtencion;
    }

    /**
     * @return mixed
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * @param mixed $resumen
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;
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
    public function getFechaAtencion()
    {
        return $this->fechaAtencion;
    }

    /**
     * @param mixed $fechaAtencion
     */
    public function setFechaAtencion($fechaAtencion)
    {
        $this->fechaAtencion = $fechaAtencion;
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

    /**
     * @return mixed
     */
    public function getIdTipoAtencion()
    {
        return $this->idTipoAtencion;
    }

    /**
     * @param mixed $idTipoAtencion
     */
    public function setIdTipoAtencion($idTipoAtencion)
    {
        $this->idTipoAtencion = $idTipoAtencion;
    }



}