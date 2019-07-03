<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
#use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Socio;
use App\credito;
use PDF;
class SocioSaldoDeudorController extends Controller
{
    //
    

    public function  generatePDF()
    {
        $credito = DB::table('socio')
            ->join('socio_cuenta', 'socio.id_socio', '=', 'socio_cuenta.id_socio')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'socio_cuenta.id_cuenta')
            ->join('credito','credito.id_cuenta','=','cuenta.id_cuenta')
            ->select('credito.*', 'socio.nombre', 'credito.deuda','credito.monto')
            ->get();
    	$data = [
            'title' => 'socio con saldo deudor',
            'credito' => $credito

    ];

        $pdf = PDF::loadView('estrategico.parametros.parametros4', $data);

  

        return $pdf->stream('reporte1.pdf');
    }
    public function index4(Request $request)
    {
        if ($request) {
            
            $ini=trim($request->get('fechainicio'));
            $fin=trim($request->get('fechafinal'));

           $credito = DB::table('socio')
            ->join('socio_cuenta', 'socio.id_socio', '=', 'socio_cuenta.id_socio')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'socio_cuenta.id_cuenta')
            ->join('credito','credito.id_cuenta','=','cuenta.id_cuenta')
            ->select('credito.*', 'socio.nombre', 'credito.deuda','credito.monto')
            ->get();
            session::flash('creditos', $credito);
            $data = [
            'title' => 'Socios con saldo deudor',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('estrategico.previaParametros.previa4',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);
            

        }
    }
}
