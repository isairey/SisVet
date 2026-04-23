<?php

/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 3/12/2015
 * Time: 2:12 PM
 */
namespace App\Atencion;
class Tratamiento
{
    private $idTratamiento;
    private $fechaProgramacion;
    private $FechaAplicacion;
    private $lote;
    private $fechaAtencion;
    private $laboratorio;
    private $idTipoTratamiento;
    private $idAnimal;
    private $IdPersonal;
    private $estado;

    /**
     * Tratamiento constructor.
     * @param $fechaProgramacion
     * @param $FechaAplicacion
     * @param $lote
     * @param $fechaAtencion
     * @param $laboratorio
     * @param $idTipoTratamiento
     * @param $idAnimal
     * @param $IdPersonal
     */

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }


    /**
     * @return mixed
     */
    public function getIdTratamiento()
    {
        return $this->idTratamiento;
    }

    /**
     * @param mixed $idTratamiento
     */
    public function setIdTratamiento($idTratamiento)
    {
        $this->idTratamiento = $idTratamiento;
    }

    /**
     * @return mixed
     */
    public function getFechaProgramacion()
    {
        return $this->fechaProgramacion;
    }

    /**
     * @param mixed $fechaProgramacion
     */
    public function setFechaProgramacion($fechaProgramacion)
    {
        $this->fechaProgramacion = $fechaProgramacion;
    }

    /**
     * @return mixed
     */
    public function getFechaAplicacion()
    {
        return $this->FechaAplicacion;
    }

    /**
     * @param mixed $FechaAplicacion
     */
    public function setFechaAplicacion($FechaAplicacion)
    {
        $this->FechaAplicacion = $FechaAplicacion;
    }

    /**
     * @return mixed
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * @param mixed $lote
     */
    public function setLote($lote)
    {
        $this->lote = $lote;
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
    public function getLaboratorio()
    {
        return $this->laboratorio;
    }

    /**
     * @param mixed $laboratorio
     */
    public function setLaboratorio($laboratorio)
    {
        $this->laboratorio = $laboratorio;
    }

    /**
     * @return mixed
     */
    public function getIdTipoTratamiento()
    {
        return $this->idTipoTratamiento;
    }

    /**
     * @param mixed $idTipoTratamiento
     */
    public function setIdTipoTratamiento($idTipoTratamiento)
    {
        $this->idTipoTratamiento = $idTipoTratamiento;
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
        return $this->IdPersonal;
    }

    /**
     * @param mixed $IdPersonal
     */
    public function setIdPersonal($IdPersonal)
    {
        $this->IdPersonal = $IdPersonal;
    }



}