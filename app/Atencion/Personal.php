<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 3/12/2015
 * Time: 11:30 PM
 */

namespace App\Atencion;
use App\Persona;

class Personal extends Persona
{
    private $idPersonal;
    private $privilegios;
    private $usuarioPersonal;
    private $paswoordPersonal;
    private $fkidPersona;
    private $idTipoPersonal;

    /**
     * @return mixed
     */
    public function getFkidPersona()
    {
        return $this->fkidPersona;
    }

    /**
     * @param mixed $fkidPersona
     */
    public function setFkidPersona($fkidPersona)
    {
        $this->fkidPersona = $fkidPersona;
    }

    /**
     * Personal constructor.
     * @param $idPersonal
     * @param $privilegios
     * @param $usuarioPersonal
     * @param $paswoordPersonal
     * @param $idPersona
     * @param $idTipoPersonal
     */


    public function __construct()
    {

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

    /**
     * @return mixed
     */
    public function getPrivilegios()
    {
        return $this->privilegios;
    }

    /**
     * @param mixed $privilegios
     */
    public function setPrivilegios($privilegios)
    {
        $this->privilegios = $privilegios;
    }

    /**
     * @return mixed
     */
    public function getUsuarioPersonal()
    {
        return $this->usuarioPersonal;
    }

    /**
     * @param mixed $usuarioPersonal
     */
    public function setUsuarioPersonal($usuarioPersonal)
    {
        $this->usuarioPersonal = $usuarioPersonal;
    }

    /**
     * @return mixed
     */
    public function getPaswoordPersonal()
    {
        return $this->paswoordPersonal;
    }

    /**
     * @param mixed $paswoordPersonal
     */
    public function setPaswoordPersonal($paswoordPersonal)
    {
        $this->paswoordPersonal = $paswoordPersonal;
    }



    /**
     * @return mixed
     */
    public function getIdTipoPersonal()
    {
        return $this->idTipoPersonal;
    }

    /**
     * @param mixed $idTipoPersonal
     */
    public function setIdTipoPersonal($idTipoPersonal)
    {
        $this->idTipoPersonal = $idTipoPersonal;
    }



}