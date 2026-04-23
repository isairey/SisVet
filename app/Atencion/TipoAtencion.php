<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 3/12/2015
 * Time: 11:11 PM
 */

namespace App\Atencion;


class TipoAtencion
{
    private $idTipoAtencion;
    private $nombre;
    private $descripcion;

    /**
     * TipoAtencion constructor.
     * @param $nombre
     * @param $descripcion
     */
    public function __construct()
    {

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

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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