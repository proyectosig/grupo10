<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Socio;
use App\credito;
use PDF;
class DirectMayorTransaccionController extends Controller
{
    //

     public function  generatePDF()
    {
        $credito = DB::table('socio')
            ->join('socio_cuenta', 'socio.id_socio', '=', 'socio_cuenta.id_socio')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'socio_cuenta.id_cuenta')
            ->join('credito','credito.id_cuenta','=','cuenta.id_cuenta')
            ->select('credito.*', 'socio.nombre', 'socio.cargo','credito.id_credito','credito.monto')
            ->get();

    
    	$data = [
    		'title' => 'directivos con mayor numero de transacciones',
            'credito' => $credito
    	];

        $pdf = PDF::loadView('estrategico.parametros.parametros2', $data);

  

        return $pdf->stream('reporte5.pdf');
    }

     public function index2(Request $request)
    {
        if ($request) {
            
            $ini=trim($request->get('fechainicio'));
            $fin=trim($request->get('fechafinal'));

            $credito = DB::table('socio')
            ->join('socio_cuenta', 'socio.id_socio', '=', 'socio_cuenta.id_socio')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'socio_cuenta.id_cuenta')
            ->join('credito','credito.id_cuenta','=','cuenta.id_cuenta')
            ->select('credito.*', 'socio.nombre', 'socio.cargo','credito.id_credito','credito.monto')
            ->get();
            session::flash('creditos', $credito);
            $data = [
            'title' => 'Directivos con mayor numero de creditos',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('estrategico.previaParametros.previa2',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);
            

        }
    }
}
