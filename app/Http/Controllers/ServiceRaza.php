<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 6/11/2015
 * Time: 2:22 PM
 */

namespace App\Http\Controllers;
use App\Raza;

class ServiceRaza extends Controller
{

    public function __construct()
    {
    }

    public function listaRaza()
    {
        $Razas=array();
        $raza = DB::select('select * from Raza WHERE Activado = 1');
        for ($i = 0; $i < count($raza); $i++) {
            $Razas[$i] = new Raza($raza[i]->idRaza, $raza->Nombre,
                $raza->EstiloDePelo, $raza->Especie_idEspecie);
        }
        return $Razas;
    }

    public function obtenerRaza($idRaza)
    {
        $raza = DB::table('raza')-> where('Activado', 1)->where('idRaza', $idRaza)->first();

        return $razas = new Raza($raza->idRaza, $raza->Nombre,
            $raza->EstiloDePelo, $raza->Especie_idEspecie);
    }

    public function obtenerRazaNombre($nombre)
    {

        $raza = DB::table('raza') ->where('Activado', 1)->where('Nombre', $nombre)->first();
        //  Especie $especie=new Especie());
        return $razas = new Raza($raza->idRaza, $raza->Nombre,
            $raza->EstiloDePelo, $raza->Especie_idEspecie);

    }

    public function agregarRaza(Raza $raza)
    {
        $count = DB::table('raza')->max('idRaza');

        DB::table('raza')->insert(
            ['idRaza' => $count + 1, 'Especie_idEspecie' => $raza->getIdEspecie(),
                'Nombre' => $raza->getNombreRaza(),
                'EstiloDePelo' => $raza->getEstiloPiel(), 'Activado' => 1
            ]
        );

    }

    public function modificarRaza(Raza $raza)
    {

        DB::table('raza')
            ->where('idRaza', $raza->getIdRaza())
            ->update(['Especie_idEspecie' => $raza->getIdEspecie(),
                'Nombre' => $raza->getNombreRaza(),
                'EstiloDePelo' => $raza->getEstiloPiel()]);
    }

    public function  eliminarRazaPorID($id)
    {
        DB::table('raza')
            ->where('idRaza', $id)
            ->update(['Activado' => 0]);
    }

    public function  eliminarRazaPorNombre($nombre)
    {
        DB::table('raza')
            ->where('Nombre', $nombre)
            ->update(['Activado' => 0]);

    }

}