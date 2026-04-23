<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 4/12/2015
 * Time: 12:36 AM
 */

namespace App\Atencion;


class Log
{
    private $idLog;
    private $fechaLog;
    private $tipoLog;
    private $descripcion;
    private $idAnimal;

    /**
     * Log constructor.
     * @param $fechaLog
     * @param $tipoLog
     * @param $descripcion
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdLog()
    {
        return $this->idLog;
    }

    /**
     * @param mixed $idLog
     */
    public function setIdLog($idLog)
    {
        $this->idLog = $idLog;
    }

    /**
     * @return mixed
     */
    public function getFechaLog()
    {
        return $this->fechaLog;
    }

    /**
     * @param mixed $fechaLog
     */
    public function setFechaLog($fechaLog)
    {
        $this->fechaLog = $fechaLog;
    }

    /**
     * @return mixed
     */
    public function getTipoLog()
    {
        return $this->tipoLog;
    }

    /**
     * @param mixed $tipoLog
     */
    public function setTipoLog($tipoLog)
    {
        $this->tipoLog = $tipoLog;
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


}