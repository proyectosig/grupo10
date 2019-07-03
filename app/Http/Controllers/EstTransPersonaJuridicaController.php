<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
#use Carbon\Carbon;
use PDF;
use App\empresa;
use App\credito;

class EstTransPersonaJuridicaController extends Controller
{
    public function reporte()
    {
    	$credito = DB::table('empresa')
            ->join('empresa', 'id_empresa', '=', 'cuenta_empresa.id_empresa')
            ->join('cuenta_empresa', 'cuenta_empresa.id_empresa', '=', 'cuenta.id_cuenta')
            ->join('cuenta','cuenta.id_cuenta','=','credito','credito.id_cuenta')
            ->select('credito.*', 'empresa.nombre', 'credito.fechainicio','credito.fechafin','credito.monto')
            ->get();
            return view('estrategico.parametros.parametros');
    }






    public function  generatePDF()
    {
    	$credito = DB::table('empresa')
            ->join('cuenta_empresa', 'empresa.id_empresa', '=', 'cuenta_empresa.id_empresa')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'cuenta_empresa.id_cuenta')
            ->join('credito','credito.id_cuenta','=','cuenta.id_cuenta')
            ->select('credito.*', 'empresa.nombre', 'credito.fechainicio','credito.fechafinal','credito.monto','credito.transaccion')
            ->get();
    	$data = [
    		'title' => 'Transaccion de personas juridicas',
    		'credito' => $credito

    	];

        $pdf = PDF::loadView('estrategico.parametros.parametros', $data);

        


        return $pdf->stream('reporte4.pdf');
    }

    public function index(Request $request)
    {
        if ($request) {
            
            $ini=trim($request->get('fechainicio'));
            $fin=trim($request->get('fechafinal'));

           $credito = DB::table('empresa')
            ->join('cuenta_empresa', 'empresa.id_empresa', '=', 'cuenta_empresa.id_empresa')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'cuenta_empresa.id_cuenta')
            ->join('credito','credito.id_cuenta','=','cuenta.id_cuenta')
            ->select('credito.*', 'empresa.nombre', 'credito.fechainicio','credito.fechafinal','credito.monto','credito.transaccion')
            ->get();
            session::flash('creditos', $credito);
            $data = [
            'title' => 'Transaccion de personas juridicas',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('estrategico.previaParametros.previa',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);


        }
    }
}
