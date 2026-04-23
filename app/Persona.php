<?php

/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 4/11/2015
 * Time: 10:45 PM
 */
namespace App;

use App\Http\Controllers\Controller;

class Persona extends controller
{
    public $idPersona;
    private $nombre;
    private $apellido;
    private $sexo;
    private $docuIdent;
    private $fechaNacimiento;
    private $email;
    private $ciudad;
    private $direccion;
    private $referenciasLocali;
    private $telefonoFijo;
    private $telefonoMovil;

    /**
     * Persona constructor.
     * @param $idPersona
     * @param $nombre
     * @param $apellido
     * @param $sexo
     * @param $docuIdent
     * @param $fechaNacimiento
     * @param $email
     * @param $ciudad
     * @param $direccion
     * @param $referenciasLocali
     * @param $telefonoFijo
     * @param $telefonoMovil
     */
    public function __construct($idPersona, $nombre, $apellido, $sexo, $docuIdent, $fechaNacimiento, $email, $ciudad, $direccion, $referenciasLocali, $telefonoFijo, $telefonoMovil)
    {
        $this->idPersona = $idPersona;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->docuIdent = $docuIdent;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->email = $email;
        $this->ciudad = $ciudad;
        $this->direccion = $direccion;
        $this->referenciasLocali = $referenciasLocali;
        $this->telefonoFijo = $telefonoFijo;
        $this->telefonoMovil = $telefonoMovil;
    }

    /**
     * @return mixed
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * @param mixed $idPersona
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;
    }

    /**
     * Persona constructor.
     * @param $nombre Nombre de la persona
     * @param $apellido Apellido de la persona
     * @param $sexo Sexo de la persona
     * @param $docuIdent Documento de identidad de la personas Dni o Ruc
     * @param $fechaNacimiento Fecha de nacimiento de la persona
     * @param $email Correo electronico
     * @param $ciudad Ciudad de residencia
     * @param $direccion direccion de rresidencia
     * @param $referenciasLocali Referencias de como ubicar ala persona
     * @param $telefonoFijo Telefono
     * @param $telefonoMobil celular
     */


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
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getDocuIdent()
    {
        return $this->docuIdent;
    }

    /**
     * @param mixed $docuIdent
     */
    public function setDocuIdent($docuIdent)
    {
        $this->docuIdent = $docuIdent;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param mixed $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param mixed $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getReferenciasLocali()
    {
        return $this->referenciasLocali;
    }

    /**
     * @param mixed $referenciasLocali
     */
    public function setReferenciasLocali($referenciasLocali)
    {
        $this->referenciasLocali = $referenciasLocali;
    }

    /**
     * @return mixed
     */
    public function getTelefonoFijo()
    {
        return $this->telefonoFijo;
    }

    /**
     * @param mixed $telefonoFijo
     */
    public function setTelefonoFijo($telefonoFijo)
    {
        $this->telefonoFijo = $telefonoFijo;
    }

    /**
     * @return mixed
     */
    public function getTelefonoMovil()
    {
        return $this->telefonoMovil;
    }

    /**
     * @param mixed $telefonoMobil
     */
    public function setTelefonoMovil($telefonoMovil)
    {
        $this->telefonoMovil = $telefonoMovil;
    }


}