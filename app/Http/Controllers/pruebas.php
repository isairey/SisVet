<?php

/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 5/12/2015
 * Time: 4:23 PM
 */
namespace App\Http\Controllers;

use App\Atencion\Personal;
use App\Atencion\Peso;
use App\Atencion\Tratamiento;
use App\Cliente;
use Mockery\Exception;

class pruebas extends Controller
{
    private $service;
    public function __construct()
    {
        $this->service=new ControlTratamiento();
    }

    public function agregar()
    {

        $this->service->aplicarTratamiento(45);

    }



}