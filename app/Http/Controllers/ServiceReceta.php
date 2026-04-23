<?php
/**
 * Created by PhpStorm.
 * User: JhonVargasN72V
 * Date: 5/12/2015
 * Time: 9:10 PM
 */

namespace App\Http\Controllers;

use DB;
use App\Atencion\Receta;
use Mockery\CountValidator\Exception;

class ServiceReceta extends Controller
{

        public  function __construct()
        {
        }

    public function nuevaReceta(Receta $receta)
    {
        Try {
            DB::table('receta')->insert(['Descripcion' => $receta->getDescripcion(),
                'FechaReceta' => $receta->getFechaReceta(), 'IdAnimal' => $receta->getIdAnimal(),
                'IdPersonal' => $receta->getIdPersonal()]);
            return true;
        } catch (Exception $e) {
            return false;
        }

    }

    public function editarReceta(Receta $receta)
    {
        Try {
            DB::table('receta')->where(['IdReceta' => $receta->getIdReceta()])->
            update(['Descripcion' => $receta->getDescripcion(),
                'FechaReceta' => $receta->getFechaReceta(),
                'IdAnimal' => $receta->getIdAnimal(),
                'IdPersonal' => $receta->getIdPersonal()]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function eliminarReceta($idReceta)
    {
        Try {
            DB::table('receta')->where(['IdReceta' => $idReceta])->
            update(['Activado' => 0]);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function mostrarRecetaFecha($idAnimal, $fecha)
    {
        Try {
            $result = DB::table('receta')->where('IdAnimal', $idAnimal)
                ->where('FechaReceta', $fecha)
                ->where('Activado', 1)->first();
            $receta = new Receta();
            $receta->setIdReceta($result->IdReceta);
            $receta->setDescripcion($result->Descripcion);
            $receta->setFechaReceta($result->FechaReceta);
            $receta->setIdAnimal($result->IdAnimal);
            $receta->setIdPersonal($result->IdPersonal);

            return $receta;
        } catch (Exception $e) {
            return null;
        }
    }

    public function mostrarRecetasAnimal($idAnimal)
    {
        $receta = array();
        Try {
            $result = DB::table('receta')->where('IdAnimal', $idAnimal)
                ->where('Activado', 1)->get();

            for ($i = 0; $i < count($result); $i++) {
                $receta[$i] = new Receta();
                $receta[$i]->setIdReceta($result[$i]->IdReceta);
                $receta[$i]->setDescripcion($result[$i]->Descripcion);
                $receta[$i]->setFechaReceta($result[$i]->FechaReceta);
                $receta[$i]->setIdAnimal($result[$i]->IdAnimal);
                $receta[$i]->setIdPersonal($result[$i]->IdPersonal);
            }
            return $receta;
        } catch (Exception $e) {
            return null;
        }
    }
    public function mostrarRecetasPersonal($idPersonal)
    {
        $receta = array();
        Try {
            $result = DB::table('receta')->where('IdPersonal', $idPersonal)
                ->where('Activado', 1)->get();

            for ($i = 0; $i < count($result); $i++) {
                $receta[$i] = new Receta();
                $receta[$i]->setIdReceta($result[$i]->IdReceta);
                $receta[$i]->setDescripcion($result[$i]->Descripcion);
                $receta[$i]->setFechaReceta($result[$i]->FechaReceta);
                $receta[$i]->setIdAnimal($result[$i]->IdAnimal);
                $receta[$i]->setIdPersonal($result[$i]->IdPersonal);
            }
            return $receta;
        } catch (Exception $e) {
            return null;
        }
    }

}