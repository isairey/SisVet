<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 11/12/2015
 * Time: 8:00 PM
 */

namespace App\Http\Controllers;

use DB;
use App\Atencion\Personal;

class ServicePersonal extends Controller
{
    public function __construct()
    {
    }


    public function nuevoPersonal(Personal $personal)
    {

        try {
            DB::transaction(function () use ($personal) {
                DB::table('persona')
                    ->insert(
                        ['DocIdent' => $personal->getDocuIdent(),
                            'Nombre' => $personal->getNombre(),
                            'Apellido' => $personal->getApellido(),
                            'Sexo' => $personal->getSexo(),
                            'FechaNac' => $personal->getFechaNacimiento(),
                            'Email' => $personal->getEmail(),
                            'Ciudad' => $personal->getCiudad(),
                            'Direccion' => $personal->getDireccion(),
                            'ReferenciasLocali' => $personal->getReferenciasLocali(),
                            'TelefFijo' => $personal->getTelefonoFijo(),
                            'TelefMovil' => $personal->getTelefonoMovil(),
                            'Activado' => 1]);

                $id = DB::table('persona')
                    ->max('IdPersona');

                DB::table('personal')
                    ->insert(['Privilegios' => $personal->getPrivilegios(),
                        'UsuarioPersonal' => $personal->getUsuarioPersonal(),
                        'PaswoordPersonal' => $personal->getPaswoordPersonal(),
                        'IdPersona' => $id,
                        'IdTipoPersonal' => $personal->getIdTipoPersonal()]);
            }

            );
        } catch (\Exception $e) {
            return false;
        }

    }

    public function editarPersonal(Personal $personal)
    {

        try {
            DB::transaction(function () use ($personal) {
                DB::table('persona')
                    ->where(['IdPersona' => $personal->getIdPersona()])
                    ->update(
                        ['DocIdent' => $personal->getDocuIdent(),
                            'Nombre' => $personal->getNombre(),
                            'Apellido' => $personal->getApellido(),
                            'Sexo' => $personal->getSexo(),
                            'FechaNac' => $personal->getFechaNacimiento(),
                            'Email' => $personal->getEmail(),
                            'Ciudad' => $personal->getCiudad(),
                            'Direccion' => $personal->getDireccion(),
                            'ReferenciasLocali' => $personal->getReferenciasLocali(),
                            'TelefFijo' => $personal->getTelefonoFijo(),
                            'TelefMovil' => $personal->getTelefonoMovil(),
                            'Activado' => 1]);

                DB::table('personal')->where(['IdPersona' => $personal->getIdPersona()])
                    ->update(['Privilegios' => $personal->getPrivilegios(),
                        'UsuarioPersonal' => $personal->getUsuarioPersonal(),
                        'PaswoordPersonal' => $personal->getPaswoordPersonal(),
                        'IdTipoPersonal' => $personal->getIdTipoPersonal(),
                        'Activado' => 1
                    ]);
            }

            );
            return true;
        } catch (\Exception $e) {
            return false;
        }


    }

    public function eliminarPersonal($idPersonal)
    {
        try {
            DB::transaction(function () use ($idPersonal) {
                DB::table('persona')
                    ->where(['IdPersona' => $idPersonal])
                    ->update(
                        ['Activado' => 0]);

                DB::table('personal')->where(['IdPersona' => $idPersonal])
                    ->update(['Activado' => 0
                    ]);
            }

            );
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function mostrarPersonal($idPersona)
    {
        try {
            $resultpersonal = DB::table('personal')->where(['IdPersona' => $idPersona])->first();
            $resultpersona = DB::table('persona')->where(['IdPersona' => $idPersona])->first();
            $personal = new Personal();
            $personal->setDireccion($resultpersona->Direccion);
            $personal->setNombre($resultpersona->Nombre);
            $personal->setApellido($resultpersona->Apellido);
            $personal->setIdPersona($resultpersona->IdPersona);
            $personal->setCiudad($resultpersona->Ciudad);
            $personal->setDocuIdent($resultpersona->DocIdent);
            $personal->setEmail($resultpersona->Email);
            $personal->setFechaNacimiento($resultpersona->FechaNac);
            $personal->setTelefonoMovil($resultpersona->TelefMovil);
            $personal->setTelefonoFijo($resultpersona->TelefFijo);
            $personal->setSexo($resultpersona->Sexo);
            $personal->setReferenciasLocali($resultpersona->ReferenciasLocali);
            $personal->setIdPersonal($resultpersonal->IdPersonal);
            $personal->setPrivilegios($resultpersonal->Privilegios);
            $personal->setUsuarioPersonal($resultpersonal->UsuarioPersonal);
            $personal->setPaswoordPersonal($resultpersonal->PaswoordPersonal);
            $personal->setFkidPersona($resultpersonal->IdPersona);
            $personal->setIdTipoPersonal($resultpersonal->IdTipoPersonal);

            return $personal->getApellido();

        } catch (\Exception $e) {
            return null;
        }
    }

    public function mostrarPersonales()
    {

        $resultpersonal = array();
        $resultpersona = array();
        $personal = array();

            $id = DB::table('personal')->select('IdPersona')->get();

            for ($i = 0; $i < count($id); $i++) {
                echo $id[$i]->IdPersona.'<br>';

                $resultpersonal[$i] = DB::table('personal')->where(['IdPersona' => $id[$i]->IdPersona])->first();
                $resultpersona[$i] = DB::table('persona')->where(['IdPersona' => $id[$i]->IdPersona])->first();
            }


            for ($i = 0; $i < count($id); $i++) {
                $personal[$i] = new Personal();
                $personal[$i]->setNombre($resultpersona[$i]->Nombre);
                $personal[$i]->setApellido($resultpersona[$i]->Apellido);
                $personal[$i]->setIdPersona($resultpersona[$i]->IdPersona);
                $personal[$i]->setCiudad($resultpersona[$i]->Ciudad);
                $personal[$i]->setDocuIdent($resultpersona[$i]->DocIdent);
                $personal[$i]->setEmail($resultpersona[$i]->Email);
                $personal[$i]->setFechaNacimiento($resultpersona[$i]->FechaNac);
                $personal[$i]->setTelefonoMovil($resultpersona[$i]->TelefMovil);
                $personal[$i]->setTelefonoFijo($resultpersona[$i]->TelefFijo);
                $personal[$i]->setSexo($resultpersona[$i]->Sexo);
                $personal[$i]->setReferenciasLocali($resultpersona[$i]->ReferenciasLocali);
                $personal[$i]->setIdPersonal($resultpersonal[$i]->IdPersonal);
                $personal[$i]->setPrivilegios($resultpersonal[$i]->Privilegios);
                $personal[$i]->setUsuarioPersonal($resultpersonal[$i]->UsuarioPersonal);
                $personal[$i]->setPaswoordPersonal($resultpersonal[$i]->PaswoordPersonal);
                $personal[$i]->setFkidPersona($resultpersonal[$i]->IdPersona);
                $personal[$i]->setIdTipoPersonal($resultpersonal[$i]->IdTipoPersonal);
            }

        return $personal;



    }
}