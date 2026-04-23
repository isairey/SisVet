<?php
namespace App\Atencion;
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 3/12/2015
 * Time: 2:11 PM
 */
class Protocolo
{
    private $idProtocolo;
    private $idTipoTratamiento;
    private $nombreProtocolo;
    private $nroDosis;
    private $duracion;

    /**
     * Protocolo constructor.
     * @param $nombreProtocolo
     * @param $nroDosis
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * @param mixed $duracion
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }


    /**
     * @return mixed
     */
    public function getIdProtocolo()
    {
        return $this->idProtocolo;
    }

    /**
     * @param mixed $idProtocolo
     */
    public function setIdProtocolo($idProtocolo)
    {
        $this->idProtocolo = $idProtocolo;
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
    public function getNombreProtocolo()
    {
        return $this->nombreProtocolo;
    }

    /**
     * @param mixed $nombreProtocolo
     */
    public function setNombreProtocolo($nombreProtocolo)
    {
        $this->nombreProtocolo = $nombreProtocolo;
    }

    /**
     * @return mixed
     */
    public function getNroDosis()
    {
        return $this->nroDosis;
    }

    /**
     * @param mixed $nroDosis
     */
    public function setNroDosis($nroDosis)
    {
        $this->nroDosis = $nroDosis;
    }


}