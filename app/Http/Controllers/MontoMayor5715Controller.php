<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
#use Carbon\Carbon;

use PDF;
use App\credito;
class MontoMayor5715Controller extends Controller
{
      

     public function  generatePDF()
    {
        $credito = DB::table('credito')
            ->join('tipo', 'tipo.id_credito', '=', 'credito.id_credito')
            ->select('credito.*', 'tipo.nombre', 'credito.monto')
            ->where('credito.monto','>',5715)
            ->get();

            
    	$data = [
            'title' => 'credito con monto mayor de $5715',
            'credito' => $credito

        ];
        $pdf = PDF::loadView('estrategico.parametros.parametros1', $data);

  

        return $pdf->stream('reporte3.pdf');
    }
     public function index1(Request $request)
    {
        if ($request) {
            
            $ini=trim($request->get('fechainicio'));
            $fin=trim($request->get('fechafinal'));

           $credito = DB::table('credito')
            ->join('tipo', 'tipo.id_credito', '=', 'credito.id_credito')
            ->select('credito.*', 'tipo.nombre', 'credito.monto')
            ->where('credito.monto','>',5715)
            ->get();
            session::flash('creditos', $credito);
            $data = [
            'title' => 'credito con monto mayor de $5715',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('estrategico.previaParametros.previa1',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);
            

        }
    }
}
