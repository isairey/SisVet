<?php
namespace App\Atencion;
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 3/12/2015
 * Time: 2:12 PM
 */
class TipoTratamiento
{
   private $idTipoTratiemnto;
    private $nombreTipoTratamiento;
   private $descripcion;

    /**
     * TipoTratamiento constructor.
     * @param $nombreTipoTratamiento
     * @param $descripcion
     */
    public function __construct()
    {

    }


    /**
     * @return mixed
     */
    public function getIdTipoTratiemnto()
    {
        return $this->idTipoTratiemnto;
    }

    /**
     * @param mixed $idTipoTratiemnto
     */
    public function setIdTipoTratiemnto($idTipoTratiemnto)
    {
        $this->idTipoTratiemnto = $idTipoTratiemnto;
    }

    /**
     * @return mixed
     */
    public function getNombreTipoTratamiento()
    {
        return $this->nombreTipoTratamiento;
    }

    /**
     * @param mixed $nombreTipoTratamiento
     */
    public function setNombreTipoTratamiento($nombreTipoTratamiento)
    {
        $this->nombreTipoTratamiento = $nombreTipoTratamiento;
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