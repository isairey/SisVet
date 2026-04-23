<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 6/11/2015
 * Time: 2:22 PM
 */

namespace App\Http\Controllers;

use DB;
use App\Persona;

class ServicePersona extends Controller
{

    public function __construct()
    {

    }

    //retorna una arreglo
    public function listar()
    {
        $Personas = array();
        $persona = DB::select('select * from persona WHERE Activado = 1');
        for($i=0;$i<count($persona);$i++){
            $Personas[$i]= new Persona($persona[$i]->IdPersona,$persona[$i]->Nombre,
                $persona[$i]->Apellido,$persona[$i]->Sexo,$persona[$i]->DocIdent,
                $persona[$i]->FechaNac,$persona[$i]->Email,
                $persona[$i]->Ciudad,$persona[$i]->Direccion,$persona[$i]->ReferenciasLocali,
                $persona[$i]->TelefFijo,$persona[$i]->TelefMovil);
        }
         return $Personas;

    }

    public function obtenerPersona($idpersona)
    {

        $personas = DB::table('persona')->where('IdPersona', $idpersona)->first();
        $persona = new Persona($personas->IdPersona,$personas->Nombre, $personas->Apellido,
            $personas->Sexo, $personas->DocIdent, $personas->FechaNac,
            $personas->Email, $personas->Ciudad, $personas->Direccion, $personas->ReferenciasLocali,
            $personas->TelefFijo, $personas->TelefMovil);
        return $persona;
    }

    public function obtenerPersonaNombre($nombre)
    {

        $Personas = array();

        try {
            $persona = DB::select("SELECT * FROM persona where Nombre LIKE '%$nombre%' ");
            for ($i = 0; $i < count($persona); $i++) {
                $Personas[$i] = new Persona($persona[$i]->IdPersona, $persona[$i]->Nombre,
                    $persona[$i]->Apellido, $persona[$i]->Sexo, $persona[$i]->DocIdent,
                    $persona[$i]->FechaNac, $persona[$i]->Email,
                    $persona[$i]->Ciudad, $persona[$i]->Direccion, $persona[$i]->ReferenciasLocali,
                    $persona[$i]->TelefFijo, $persona[$i]->TelefMovil);
            }

           return $Personas;
        }catch (\mysqli_sql_exception $e)
        {
            return null;
        }
    }
    public function obtenerPersonaDocIdent($dni)
    {

        $Personas = array();

        try {
            $persona = DB::select("SELECT * FROM persona where DocIdent LIKE '%$dni%' ");
            for ($i = 0; $i < count($persona); $i++) {
                $Personas[$i] = new Persona($persona[$i]->IdPersona, $persona[$i]->Nombre,
                    $persona[$i]->Apellido, $persona[$i]->Sexo, $persona[$i]->DocIdent,
                    $persona[$i]->FechaNac, $persona[$i]->Email,
                    $persona[$i]->Ciudad, $persona[$i]->Direccion, $persona[$i]->ReferenciasLocali,
                    $persona[$i]->TelefFijo, $persona[$i]->TelefMovil);
            }

            return $Personas;
        }catch (\mysqli_sql_exception $e)
        {
            return null;
        }
    }

    public function agregarPersona(Persona $persona)
    {
        // agregar una especie la columna activado es para eliminar(no se elimina el registro solo
        //cambia su estado)
        DB::table('persona')->insert(
            ['IdPersona' => $persona->getIdPersona(), 'DocIdent' => $persona->getDocuIdent(),
                'Nombre' => $persona->getNombre(), 'Apellido' => $persona->getApellido(),
                'Sexo' => $persona->getSexo(), 'FechaNac' => $persona->getFechaNacimiento(),
                'Email' => $persona->getEmail(), 'Ciudad' => $persona->getCiudad(),
                'Direccion' => $persona->getDireccion(), 'ReferenciasLocali' => $persona->getReferenciasLocali()
                , 'TelefFijo' => $persona->getTelefonoFijo(), 'TelefMovil' => $persona->getTelefonoMovil(),
                'Activado' => 1
            ]
        );

    }

    public function modificarPersona(Persona $persona)
    {
        DB::table('persona')
            ->where('IdPersona', $persona->getIdPersona())
            ->update(['DocIdent' => $persona->getDocuIdent(),
                'Nombre' => $persona->getNombre(), 'Apellido' => $persona->getApellido(),
                'Sexo' => $persona->getSexo(), 'FechaNac' => $persona->getFechaNacimiento(),
                'Email' => $persona->getEmail(), 'Ciudad' => $persona->getCiudad(),
                'Direccion' => $persona->getDireccion(), 'ReferenciasLocali' => $persona->getReferenciasLocali()
                , 'TelefFijo' => $persona->getTelefonoFijo(), 'TelefMovil' => $persona->getTelefonoMovil()]);
    }

    public function  eliminarPersonaPorID($id)
    {
        DB::table('persona')
            ->where('IdPersona', $id)
            ->update(['Activado' => 0]);
    }


}