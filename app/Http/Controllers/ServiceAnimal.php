<?php

/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 6/11/2015
 * Time: 2:21 PM
 */
namespace App\Http\Controllers;
use App\Animal;
use DB;
class ServiceAnimal extends Controller
{
    public function __construct()
    {
    }

    public function listar()
    {
        $animal=array();
        $animales = DB::select('select * from Animal WHERE Activado = 1');


        for($i=0;$i<count($animales);$i++)
        {
            $animal[$i]=new Animal($animales[$i]->IdAnimal,$animales[$i]->Nombre,$animales->Sexo,
                $animales[$i]->Esterilizacion,$animales[$i]->FechaDeNacimiento,$animales[$i]->Estado,
            $animales[$i]->Codigo,$animales[$i]->observacion,$animales[$i]->Color,$animales[$i]->Pedigree,
            $animales[$i]->NumPedigree,$animales[$i]->Raza_idRaza,$animales[$i]->Cliente_idCliente);

        }
        $animal->getnombre();
    }

    public function listarAnimalesDeCliente($idCliente)
    {
        $animales = DB::select('select * from Animal WHERE Cliente_idCLiente = ?', [$idCliente]);
        for($i=0;$i<count($animales);$i++)
        {
            $Animal[$i]=new Animal($animales[$i]->IdAnimal,$animales[$i]->Nombre,$animales->Sexo,
                $animales[$i]->Esterilizacion,$animales[$i]->FechaDeNacimiento,$animales[$i]->Estado,
                $animales[$i]->Codigo,$animales[$i]->observacion,$animales[$i]->Color,$animales[$i]->Pedigree,
                $animales[$i]->NumPedigree,$animales[$i]->Raza_idRaza,$animales[$i]->Cliente_idCliente);

        }
        return $Animal;
    }

    public function obtenerAnimal($idAnimal)
    {
        $animales = DB::table('animal')->where('idAnimal', $idAnimal)->first();
        $animal=new Animal($animales->IdAnimal,$animales->Nombre,$animales->Sexo,
            $animales->Esterilizacion,$animales->FechaDeNacimiento,$animales->Estado,
            $animales->Codigo,$animales->observacion,$animales->Color,$animales->Pedigree,
            $animales->NumPedigree,$animales->Raza_idRaza,$animales->Cliente_idCliente);
        return $animal;
    }

    public function obtenerAnimalNombre($nombre)
    {
        $Animal=array();
        try {
            $animales = DB::select("SELECT * FROM animal where Nombre LIKE '%$nombre%' ");
            for ($i = 0; $i < count($animales); $i++) {
                $Animal[$i] = new Animal($animales[$i]->IdAnimal, $animales[$i]->Nombre, $animales->Sexo,
                    $animales[$i]->Esterilizacion, $animales[$i]->FechaDeNacimiento, $animales[$i]->Estado,
                    $animales[$i]->Codigo, $animales[$i]->observacion, $animales[$i]->Color, $animales[$i]->Pedigree,
                    $animales[$i]->NumPedigree, $animales[$i]->Raza_idRaza, $animales[$i]->Cliente_idCliente);

            }

            return $Animal;
        }catch (Exception $e)
        {
            return null;
        }
    }

    public function agregarAnimal(Animal $animal)
    {
        $count = DB::table('animal')->max('idAnimal');
        $count;
        // agregar una especie la columna activado es para eliminar(no se elimina el registro solo
        //cambia su estado)
        DB::table('animal')->insert(
            ['idAnimal' => $count + 1, 'Codigo' => $animal->getCodigo(),
                'Nombre' => $animal->getNombre(), 'Sexo' => $animal->getSexo(),
                'Esterilizacion' => $animal->getEsterilizacion(), 'FechaDeNacimiento' => $animal
                ->getFechaNacimiento(), 'Estado' => $animal->getEstado(),
                'Observacion' => $animal->getObservacion(), 'Color' => $animal->getColor()
                , 'Pedigree' => $animal->getPedigree(), 'NumPedigree' => $animal->getNumPedigree(),
                'Cliente_idCliente' => $animal->getIdCliente(), 'Raza_idRaza' => $animal->getIdraza(),
                'Activado' => 1
            ]
        );

    }

    public function modificarAnimal(Animal $animal)
    {
        DB::table('animal')
            ->where('idAnimal', $animal->getIdAnimal())
            ->update(['Codigo' => $animal->getCodigo(),
                'Nombre' => $animal->getNombre(), 'Sexo' => $animal->getSexo(),
                'Esterilizacion' => $animal->getEsterilizacion(), 'FechaDeNacimiento' => $animal
                    ->getFechaNacimiento(), 'Estado' => $animal->getEstado(),
                'Observacion' => $animal->getObservacion(), 'Color' => $animal->getColor()
                , 'Pedigree' => $animal->getPedigree(), 'NumPedigree' => $animal->getNumPedigree(),
                'Cliente_idCliente' => $animal->getIdCliente(), 'Raza_idRaza' => $animal->getIdraza()]);
    }

    public function  eliminarAnimalPorID($id)
    {
        DB::table('animal')
            ->where('idAnimal', $id)
            ->update(['Activado' => 0]);
    }

    public function  eliminarAnimalPorNombre($nombre)
    {
        DB::table('animal')
            ->where('Nombre', $nombre)
            ->update(['Activado' => 0]);

    }


}