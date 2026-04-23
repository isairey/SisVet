<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 4/12/2015
 * Time: 12:11 AM
 */

namespace App\Atencion;


class TipoPersonal
{
    private $idTipoPersonal;
    private $nombreTipoPersonal;
    private $descripcion;

    /**
     * TipoPersonal constructor.
     * @param $idTipoPersona
     * @param $nombreTipoPersonal
     * @param $descripcion
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getIdTipoPersonal()
    {
        return $this->idTipoPersonal;
    }

    /**
     * @param mixed $idTipoPersona
     */
    public function setIdTipoPersonal($idTipoPersonal)
    {
        $this->idTipoPersonal = $idTipoPersonal;
    }

    /**
     * @return mixed
     */
    public function getNombreTipoPersonal()
    {
        return $this->nombreTipoPersonal;
    }

    /**
     * @param mixed $nombreTipoPersonal
     */
    public function setNombreTipoPersonal($nombreTipoPersonal)
    {
        $this->nombreTipoPersonal = $nombreTipoPersonal;
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

}