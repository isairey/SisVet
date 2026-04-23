<?php

/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 5/11/2015
 * Time: 4:48 PM
 */
namespace App\Http\Controllers;
use BD;
use App\Animal;
class  ControlAnimal extends Controller
{
    private $serviceAnimal;
    private $serviceEspecie;
    private $serviceRaza;
    private $serviceCliente;

    function __construct()
    {
        $this->serviceAnimal=new ServiceAnimal();
        $this->serviceEspecie=new ServiceEspecie();
        $this->serviceRaza=new ServiceRaza();
        $this->serviceCliente=new ServiceCliente();
    }

    public function  listarAnimales()
    {
        return $animal=$this->serviceAnimal->listar();

    }

    public function obtenerAnimal($idCliente)
    {

        return $animal=$this->serviceAnimal->obtenerAnimal($idCliente);

    }

    public function listaDeAnimalCliente($idCliente)
    {

        return $animal=$this->serviceAnimal->listarAnimalesDeCliente($idCliente);
    }

    public function obtenerRazaAnimal($idRaza)
    {
        return $raza=$this->serviceRaza->obtenerRaza($idRaza);
    }

    public function obtenerEsoecie($idEspecie)
    {
        return $especie=$this->serviceEspecie->obtenerEspecie($idEspecie);
    }
    public function nuevoAnimal(Animal $animal)
    {
       $this->serviceAnimal->agregarAnimal($animal);
    }

    public  function eliminarAnimalID($idAnimal)
    {
        $this->serviceAnimal->eliminarAnimalPorID($idAnimal);
    }
    public  function eliminarAnimalNombre($nombre)
    {
        $this->serviceAnimal->eliminarAnimalPorNombre($nombre);
    }


}