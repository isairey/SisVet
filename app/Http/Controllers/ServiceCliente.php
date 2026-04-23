<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 6/11/2015
 * Time: 2:22 PM
 */

namespace App\Http\Controllers;

use DB;
use App\Cliente;
Use App\Persona;

class ServiceCliente extends controller
{
    private $servicePersona;

    public function __construct()
    {
        $this->servicePersona = new ServicePersona();
    }

    public function agregarCliente(Cliente $cliente)
    {
        echo $cliente->getFoto();
        try {
            DB::transaction(function () use ($cliente) {
                DB::table('persona')
                    ->insert(
                        ['DocIdent' => $cliente->getDocuIdent(),
                            'Nombre' => $cliente->getNombre(),
                            'Apellido' => $cliente->getApellido(),
                            'Sexo' => $cliente->getSexo(),
                            'FechaNac' => $cliente->getFechaNacimiento(),
                            'Email' => $cliente->getEmail(),
                            'Ciudad' => $cliente->getCiudad(),
                            'Direccion' => $cliente->getDireccion(),
                            'ReferenciasLocali' => $cliente->getReferenciasLocali(),
                            'TelefFijo' => $cliente->getTelefonoFijo(),
                            'TelefMovil' => $cliente->getTelefonoMovil(),
                            'Activado' => 1]);

                $id = DB::table('persona')
                    ->max('IdPersona');

                DB::table('cliente')
                    ->insert(['FechaAfiliacion' => $cliente->getFechaDeAfiliacion(),
                        'ComoConoce' => $cliente->getComoConoce(),
                        'Foto' => $cliente->getFoto(),
                        'Persona_IdPersona' => $id]);
            }

            );
            return true;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }

    public function modificarCliente(Cliente $cliente)
    {
        try {
            DB::transaction(function () use ($cliente) {
                DB::table('persona')->where(['IdPersona' => $cliente->getIdPersona()])
                    ->update(
                        ['DocIdent' => $cliente->getDocuIdent(),
                            'Nombre' => $cliente->getNombre(),
                            'Apellido' => $cliente->getApellido(),
                            'Sexo' => $cliente->getSexo(),
                            'FechaNac' => $cliente->getFechaNacimiento(),
                            'Email' => $cliente->getEmail(),
                            'Ciudad' => $cliente->getCiudad(),
                            'Direccion' => $cliente->getDireccion(),
                            'ReferenciasLocali' => $cliente->getReferenciasLocali(),
                            'TelefFijo' => $cliente->getTelefonoFijo(),
                            'TelefMovil' => $cliente->getTelefonoMovil()]);

                DB::table('cliente')
                    ->where(['Persona_IdPersona' => $cliente->getIdPersona()])
                    ->update(['FechaAfiliacion' => $cliente->getFechaDeAfiliacion(),
                        'ComoConoce' => $cliente->getComoConoce(),
                        'Foto' => $cliente->getFoto()]);
            }

            );
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function  eliminarClientePorID($idPersona)
    {
        try {
            DB::transaction(function () use ($idPersona) {
                DB::table('persona')->where(['IdPersona' => $idPersona])
                    ->update(
                        ['Activado' => 0]);

                DB::table('cliente')
                    ->where(['Persona_IdPersona' => $idPersona])
                    ->update(['Activado' => 0]);
            }
            );
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }


    public function listarClientes()
    {
        $resultCliente = array();
        $resultpersona = array();
        $cliente = array();
        try {
            $id = DB::table('cliente')->select('Persona_IdPersona')->get();
            for ($i = 0; $i < count($id); $i++) {
                $resultCliente[$i] = DB::table('cliente')->where(['Activado'=>1])->where(['Persona_IdPersona' => $id[$i]->Persona_IdPersona])->first();
                $resultpersona[$i] = DB::table('persona')->where(['Activado'=>1])->where(['IdPersona' => $id[$i]->Persona_IdPersona])->first();
            }
            for ($i = 0; $i < count($id);$i++) {
                $cliente[$i] = new Cliente();
                $cliente[$i]->setNombre($resultpersona[$i]->Nombre);
                $cliente[$i]->setApellido($resultpersona[$i]->Apellido);
                $cliente[$i]->setIdPersona($resultpersona[$i]->IdPersona);
                $cliente[$i]->setCiudad($resultpersona[$i]->Ciudad);
                $cliente[$i]->setDocuIdent($resultpersona[$i]->DocIdent);
                $cliente[$i]->setEmail($resultpersona[$i]->Email);
                $cliente[$i]->setFechaNacimiento($resultpersona[$i]->FechaNac);
                $cliente[$i]->setTelefonoMovil($resultpersona[$i]->TelefMovil);
                $cliente[$i]->setTelefonoFijo($resultpersona[$i]->TelefFijo);
                $cliente[$i]->setSexo($resultpersona[$i]->Sexo);
                $cliente[$i]->setReferenciasLocali($resultpersona[$i]->ReferenciasLocali);
                $cliente[$i]->setDireccion($resultpersona[$i]->Direccion);
                $cliente[$i]->setFechaDeAfiliacion($resultCliente[$i]->FechaAfiliacion);
                $cliente[$i]->setComoConoce($resultCliente[$i]->ComoConoce);
                $cliente[$i]->setFoto($resultCliente[$i]->Foto);
                $cliente[$i]->setIdCliente($resultCliente[$i]->IdCliente);
                $cliente[$i]->setIdfkPersona($resultCliente[$i]->Persona_IdPersona);
            }

            return $cliente;

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function obtenerCliente($idCliente)
    {

        try {
            $resultCliente = DB::table('cliente')->where(['Activado'=>1])->where(['Persona_IdPersona' => $idCliente])->first();
            $resultpersona = DB::table('persona')->where(['Activado'=>1])->where(['IdPersona' => $idCliente])->first();
            $cliente = new Cliente();
            $cliente->setNombre($resultpersona->Nombre);
            $cliente->setApellido($resultpersona->Apellido);
            $cliente->setIdPersona($resultpersona->IdPersona);
            $cliente->setCiudad($resultpersona->Ciudad);
            $cliente->setDocuIdent($resultpersona->DocIdent);
            $cliente->setEmail($resultpersona->Email);
            $cliente->setFechaNacimiento($resultpersona->FechaNac);
            $cliente->setTelefonoMovil($resultpersona->TelefMovil);
            $cliente->setTelefonoFijo($resultpersona->TelefFijo);
            $cliente->setSexo($resultpersona->Sexo);
            $cliente->setReferenciasLocali($resultpersona->ReferenciasLocali);
            $cliente->setDireccion($resultpersona->Direccion);
            $cliente->setFechaDeAfiliacion($resultCliente->FechaAfiliacion);
            $cliente->setComoConoce($resultCliente->ComoConoce);
            $cliente->setFoto($resultCliente->Foto);
            $cliente->setIdCliente($resultCliente->IdCliente);
            $cliente->setIdfkPersona($resultCliente->Persona_IdPersona);


            return $cliente;

        } catch (\Exception $e) {
            return $e->getMessage();
        }


    }



   /* public function obtenerClientePorNombre($nombre)
    {
        $personas = $this->servicePersona->obtenerPersonaNombre($nombre);
        $clientes = DB::table('cliente')->where('idCliente', $personas->getIdPersona())->first();
        $cliente = new Cliente($clientes->idCliente, $clientes->FechaAfiliacion,
            $clientes->ComoConoce, $clientes->Foto, $clientes->Persona_IdPersona,
            $personas->getNombre(), $personas->getApellido(), $personas->getSexo(),
            $personas->getDocuIdent(), $personas->getFechaNacimiento(), $personas->getEmail()
            , $personas->getCiudad(), $personas->getDireccion(), $personas->getReferenciasLocali(),
            $personas->getTelefonoMovil(), $personas->getTelefonoFijo());
        return $cliente;

    }

    public function obtenerClientePorDNI($docIdentidad)
    {
        $personas = $this->servicePersona->obtenerPersonaDocIdent($docIdentidad);
        $clientes = DB::table('cliente')->where('idCliente', $personas->getIdPersona())->first();
        $cliente = new Cliente($clientes->idCliente, $clientes->FechaAfiliacion,
            $clientes->ComoConoce, $clientes->Foto, $clientes->Persona_IdPersona,
            $personas->getNombre(), $personas->getApellido(), $personas->getSexo(),
            $personas->getDocuIdent(), $personas->getFechaNacimiento(), $personas->getEmail()
            , $personas->getCiudad(), $personas->getDireccion(), $personas->getReferenciasLocali(),
            $personas->getTelefonoMovil(), $personas->getTelefonoFijo());
        return $cliente;

    }*/


}