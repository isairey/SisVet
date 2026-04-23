<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 5/11/2015
 * Time: 12:25 PM
 */

namespace App;

use App\Http\Controllers\Controller;
class Especie extends Controller
{
    public $idEspecie;
    public $nombre;
    public $tipo;
    public $descripcion;
    public $tipoDePiel;


    /**
     * Especie constructor.
     * @param $idEspecie
     * @param $nombre
     * @param $tipo
     * @param $descripcion
     * @param $tipoDePiel
     */
    public function __construct($idEspecie, $nombre, $tipo, $descripcion, $tipoDePiel)
    {
        $this->idEspecie = $idEspecie;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->tipoDePiel = $tipoDePiel;
    }


    /**
     * @return mixed
     */
    public function getTipoDePiel()
    {
        return $this->tipoDePiel;
    }

    /**
     * @param mixed $tipoDePiel
     */
    public function setTipoDePiel($tipoDePiel)
    {
        $this->tipoDePiel = $tipoDePiel;
    }

    /**
     * @return mixed
     */
    public function getIdEspecie()
    {
        return $this->idEspecie;
    }

    /**
     * @param mixed $idEspecie
     */
    public function setIdEspecie($idEspecie)
    {
        $this->idEspecie = $idEspecie;
    }

    /**
     * Especie constructor.
     * @param $nombre
     * @param $tipo
     * @param $descripcion
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
     * @return Especifica que tipo de animal es ejmp(marino,terrrestre o volador)
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
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