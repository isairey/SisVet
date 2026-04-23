<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 3/12/2015
 * Time: 11:02 PM
 */

namespace App\Atencion;


class Analisis
{
    private $idAnalisis;
    private $ubicacion;
    private $fechaAnalisis;
    private $idAnimal;
    private $idTipoAnalisis;
    private $idPersonal;

    /**
     * Analisis constructor.
     * @param $ubicacion
     * @param $fechaAnalisis
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdAnalisis()
    {
        return $this->idAnalisis;
    }

    /**
     * @param mixed $idAnalisis
     */
    public function setIdAnalisis($idAnalisis)
    {
        $this->idAnalisis = $idAnalisis;
    }

    /**
     * @return mixed
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * @param mixed $ubicacion
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }

    /**
     * @return mixed
     */
    public function getFechaAnalisis()
    {
        return $this->fechaAnalisis;
    }

    /**
     * @param mixed $fechaAnalisis
     */
    public function setFechaAnalisis($fechaAnalisis)
    {
        $this->fechaAnalisis = $fechaAnalisis;
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
    public function getIdTipoAnalisis()
    {
        return $this->idTipoAnalisis;
    }

    /**
     * @param mixed $idTipoAnalisis
     */
    public function setIdTipoAnalisis($idTipoAnalisis)
    {
        $this->idTipoAnalisis = $idTipoAnalisis;
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