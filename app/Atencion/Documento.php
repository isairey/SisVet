<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 4/12/2015
 * Time: 12:00 AM
 */

namespace App\Atencion;


class Documento
{

    private $idDocumento;
    private $tipoDocumento;
    private $ubicacionDocunemto;
    private $idAnimal;
    private $idPersonal;

    /**
     * Documento constructor.
     * @param $idDocumento
     * @param $tipoDocumento
     * @param $ubicacionDocunemto
     * @param $idAnimal
     * @param $idPersonal
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getIdDocumento()
    {
        return $this->idDocumento;
    }

    /**
     * @param mixed $idDocumento
     */
    public function setIdDocumento($idDocumento)
    {
        $this->idDocumento = $idDocumento;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * @param mixed $tipoDocumento
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
    }

    /**
     * @return mixed
     */
    public function getUbicacionDocunemto()
    {
        return $this->ubicacionDocunemto;
    }

    /**
     * @param mixed $ubicacionDocunemto
     */
    public function setUbicacionDocunemto($ubicacionDocunemto)
    {
        $this->ubicacionDocunemto = $ubicacionDocunemto;
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