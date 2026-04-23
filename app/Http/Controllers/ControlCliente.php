<?php

/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 5/11/2015
 * Time: 4:48 PM
 */
namespace App\Http\Controllers;
use App\Cliente;
use App\Animal;
class ControlCliente extends controller
{
    public $cliente;
    public $animal;

    /**
     * prueba constructor.
     * @param $persona
     */
    public function __construct()
    {
        $this->cliente = new ServiceCliente();
        $this->animal = new ServiceAnimal();
    }
//lista todos los clientes de la BD
    public function listarClientes()
    {

      return  $cliente = $this->cliente->listarClientes();

    }
    // obtiene datos de Cliente y persona
    //tiene un metodo donde hace llamado a los datos de la persona ServiceCliente| obtenerCliente

    public function  obtenerClientePorId($id)
    {
       return $cliente = $this->cliente->obtenerCliente($id);

    }

    public function obtenerClientePorNombre($nombre)
    {
        return $cliente = $this->cliente->obtenerClientePorNombre($nombre);
    }

    public function  obtenerClientePorDni($dniCliente)
    {
        return $cliente = $this->cliente->obtenerClientePorDNI($dniCliente);
    }

    public function buscarClientePorAnimal($idAnimal)
    {
        $anim=$this->animal->obtenerAnimal($idAnimal);
        $clientes=$this->cliente->obtenerCliente($anim->getIdCliente());
        return $clientes;
    }

    public function nuevoCliente(Cliente $cliente)
    {
        $this->cliente->agregarCliente($cliente);
    }

    public function eliminarCliente($idCliente)
    {
        $this->eliminarCliente($idCliente);
    }

}