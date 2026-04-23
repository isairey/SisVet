<?php

/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 4/11/2015
 * Time: 10:55 PM
 */
namespace App;

class Cliente extends Persona
{
    private $idCliente;
    private $fechaDeAfiliacion;
    private $comoConoce;
    private $fotografia;
    private $idfkPersona;

    public function __construct
    ()
    {

    }/**
 * @return mixed
 */
    public function getIdfkPersona()
{
    return $this->idfkPersona;
}/**
 * @param mixed $idfkPersona
 */
public function setIdfkPersona($idfkPersona)
{
    $this->idfkPersona = $idfkPersona;
}


    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $idCliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * @return mixed
     */
    public function getFechaDeAfiliacion()
    {
        return $this->fechaDeAfiliacion;
    }

    /**
     * @param mixed $fechaDeAfiliacion
     */
    public function setFechaDeAfiliacion($fechaDeAfiliacion)
    {
        $this->fechaDeAfiliacion = $fechaDeAfiliacion;
    }

    /**
     * @return mixed
     */
    public function getComoConoce()
    {
        return $this->comoConoce;
    }

    /**
     * @param mixed $comoConoce
     */
    public function setComoConoce($comoConoce)
    {
        $this->comoConoce = $comoConoce;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->fotografia;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->fotografia= $foto;
    }


}