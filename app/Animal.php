<?php

/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 5/11/2015
 * Time: 11:59 AM
 */

namespace App;
use App\Http\Controllers\Controller;
class Animal extends controller
{
    private $idAnimal;
    private $nombre;
    private $sexo;
    private $esterilizacion;
    private $fechaNacimiento;
    private $estado;
    private $codigo;
    private $observacion;
    private $color;
    private $pedigree;
    private $numPedigree;
    private $idraza;
    private $idCliente;

public function __construct($idAnimal, $nombre, $sexo, $esterilizacion, $fechaNacimiento, $estado, $codigo, $observacion, $color, $pedigree, $numPedigree, $idraza, $idCliente)
{
    $this->idAnimal = $idAnimal;
    $this->nombre = $nombre;
    $this->sexo = $sexo;
    $this->esterilizacion = $esterilizacion;
    $this->fechaNacimiento = $fechaNacimiento;
    $this->estado = $estado;
    $this->codigo = $codigo;
    $this->observacion = $observacion;
    $this->color = $color;
    $this->pedigree = $pedigree;
    $this->numPedigree = $numPedigree;
    $this->idraza = $idraza;
    $this->idCliente = $idCliente;
}
public function getIdAnimal()
{
    return $this->idAnimal;
}
public function setIdAnimal($idAnimal)
{
    $this->idAnimal = $idAnimal;
}
public function getNombre()
{
    return $this->nombre;
}
public function setNombre($nombre)
{
    $this->nombre = $nombre;
}
public function getSexo()
{
    return $this->sexo;
}
public function setSexo($sexo)
{
    $this->sexo = $sexo;
}
public function getEsterilizacion()
{
    return $this->esterilizacion;
}
public function setEsterilizacion($esterilizacion)
{
    $this->esterilizacion = $esterilizacion;
}
public function getFechaNacimiento()
{
    return $this->fechaNacimiento;
}/**
 * @param mixed $fechaNacimiento
 */
public function setFechaNacimiento($fechaNacimiento)
{
    $this->fechaNacimiento = $fechaNacimiento;
}/**
 * @return mixed
 */
public function getEstado()
{
    return $this->estado;
}/**
 * @param mixed $estado
 */
public function setEstado($estado)
{
    $this->estado = $estado;
}/**
 * @return mixed
 */
public function getCodigo()
{
    return $this->codigo;
}/**
 * @param mixed $codigo
 */
public function setCodigo($codigo)
{
    $this->codigo = $codigo;
}/**
 * @return mixed
 */
public function getObservacion()
{
    return $this->observacion;
}/**
 * @param mixed $observacion
 */
public function setObservacion($observacion)
{
    $this->observacion = $observacion;
}/**
 * @return mixed
 */
public function getColor()
{
    return $this->color;
}/**
 * @param mixed $color
 */
public function setColor($color)
{
    $this->color = $color;
}/**
 * @return mixed
 */
public function getPedigree()
{
    return $this->pedigree;
}/**
 * @param mixed $pedigree
 */
public function setPedigree($pedigree)
{
    $this->pedigree = $pedigree;
}/**
 * @return mixed
 */
public function getNumPedigree()
{
    return $this->numPedigree;
}/**
 * @param mixed $numPedigree
 */
public function setNumPedigree($numPedigree)
{
    $this->numPedigree = $numPedigree;
}/**
 * @return mixed
 */
public function getIdraza()
{
    return $this->idraza;
}/**
 * @param mixed $idraza
 */
public function setIdraza($idraza)
{
    $this->idraza = $idraza;
}/**
 * @return mixed
 */
public function getIdCliente()
{
    return $this->idCliente;
}/**
 * @param mixed $idCliente
 */
public function setIdCliente($idCliente)
{
    $this->idCliente = $idCliente;
}

    /**
     * Animal constructor.
     * @param $nombre
     * @param $sexo
     * @param $esterilizacion
     * @param $fechaNacimiento
     * @param $estado
     * @param $codigo
     * @param $observacion
     * @param $color
     * @param $pedigree
     * @param $numPedigree
     * @param $raza
     */



}