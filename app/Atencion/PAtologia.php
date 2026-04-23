<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 4/12/2015
 * Time: 12:22 AM
 */

namespace App\Atencion;


class Patologia
{
    private $idPatologia;
    private $nombrePatologia;
    private $desripcionPatologia;

    /**
     * PAtologia constructor.
     * @param $nombrePatologia
     * @param $desripcionPatologia
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getIdPatologia()
    {
        return $this->idPatologia;
    }

    /**
     * @param mixed $idPatologia
     */
    public function setIdPatologia($idPatologia)
    {
        $this->idPatologia = $idPatologia;
    }

    /**
     * @return mixed
     */
    public function getNombrePatologia()
    {
        return $this->nombrePatologia;
    }

    /**
     * @param mixed $nombrePatologia
     */
    public function setNombrePatologia($nombrePatologia)
    {
        $this->nombrePatologia = $nombrePatologia;
    }

    /**
     * @return mixed
     */
    public function getDesripcionPatologia()
    {
        return $this->desripcionPatologia;
    }

    /**
     * @param mixed $desripcionPatologia
     */
    public function setDesripcionPatologia($desripcionPatologia)
    {
        $this->desripcionPatologia = $desripcionPatologia;
    }

}