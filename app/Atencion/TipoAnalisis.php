<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 3/12/2015
 * Time: 5:20 PM
 */

namespace App\Atencion;


class TipoAnalisis
{
    private $idTipoAnalisis;
    private $nombre;
    private $descripcion;

    /**
     * TipoAnalisis constructor.
     * @param $nombre
     * @param $descripcion
     */
    public function __construct()
    {
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