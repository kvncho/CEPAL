<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;


class RutasController extends Controller
{


    public function menu()
    {

        $encuesta =  \App\Encuestas::with('preguntas')->get();

        foreach ($encuesta as  $f) {
            echo $f ;
        }
    /* $table_objetivo = DB::table('objetivo')
            ->select( 'numero_objetivo','descripcion_ES')
            ->get();*/


   /* select O.numero_objetivo ,i.numero_indicador as 'numero_indicador' from menu
    INNER JOIN objetivo o ON menu.objetivo_id = o.objetivo_id
    INNER JOIN indicador i ON menu.indicador_id = i.indicador_id
    where  O.numero_objetivo = $table_objetivo->numero_objetivo;
    */

        //$cantidad=count($table_objetivo);


      //  for($i=0;$i>$cantidad;$i++) {
          /*  $table_indicador = DB::table('menu')
                ->select('i.numero_indicador as numero_indicador')
                ->join('objetivo as o', 'menu.objetivo_id', '=', 'o.objetivo_id')
                ->join('indicador as i', 'menu.indicador_id', '=', 'i.indicador_id')
                ->where('o.numero_objetivo', 'menu.numero_objetivo' )
                ->get();*/
        //}




       // return view('users.home', compact('table_objetivo'));
       //  return view('users.home')->with(['table_objetivo' => $table_objetivo]);
        //return view('users.home',['objetivo' => $table_objetivo]);
    }
    //SELECT `numero_objetivo` FROM `objetivo`
}
