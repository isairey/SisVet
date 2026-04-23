<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 11/12/2015
 * Time: 5:59 PM
 */

namespace App\Http\Controllers;

use DB;
use App\Atencion\TipoPersonal;
use Mockery\CountValidator\Exception;

class ServiceTipoPersonal extends Controller
{

    /**
     * ServiceTipoPersonal constructor.
     */
    public function __construct()
    {
    }

    public function nuevoTipoPersonal(TipoPersonal $tipoPersonal)
    {
        try {
            DB::table('tipopersonal')
                ->insert([
                    'NombreTipoPersonal' => $tipoPersonal->getNombreTipoPersonal(),
                    'Descripcion' => $tipoPersonal->getDescripcion()
                ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function editarTipoPersonal(TipoPersonal $tipoPersonal)
    {
        try {
            DB::table('tipopersonal')->where('IdTipoPersonal', $tipoPersonal->getIdTipoPersonal())
                ->update([
                    'NombreTipoPersonal' => $tipoPersonal->getNombreTipoPersonal(),
                    'Descripcion' => $tipoPersonal->getDescripcion()
                ]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function eliminarTipoPersonal($idTipoPersonal)
    {
        try {
            DB::table('tipopersonal')->where('IdTipoPersonal', $idTipoPersonal)
                ->update(['Activado' => 0]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function mostrarTiposPersonal()
    {
        $tipoPersonal = array();
        try {
            $result = DB::table('tipopersonal')->
            where(['Activado' => 0])
                ->get();
            for ($i = 0; $i < count($result); $i++) {
                $tipoPersonal[$i] = new TipoPersonal();
                $tipoPersonal[$i]->setIdTipoPersonal($result[$i]->IdTipoPersonal);
                $tipoPersonal[$i]->setNombreTipoPersonal($result[$i]->NombreTipoPersonal);
            }
            return $tipoPersonal;
        } catch (Exception $e) {
            return false;
        }
    }

    public function  mostrarTipoPersonal($idTipoPersonal)
    {
        try {
            $result = DB::table('tipopersonal')
                ->where(['IdTipoPersonal' => $idTipoPersonal])
                ->where(['Activado' => 0])
                ->first();
            $tipoPersonal = new TipoPersonal();
            $tipoPersonal->setIdTipoPersonal($result->IdTipoPersonal);
            $tipoPersonal->setNombreTipoPersonal($result->NombreTipoPersonal);
            $tipoPersonal->setDescripcion($result->Descripcion);
            return $tipoPersonal;
        } catch (Exception $e) {
        }
    }


}