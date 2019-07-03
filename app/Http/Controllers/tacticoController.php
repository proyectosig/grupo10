<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
#use Carbon\Carbon;

use PDF;
use App\credito;
use App\socio;
use App\empresa;
use App\cuenta;
use App\ahorro;
use App\tipo;
use App\socio_cuenta;
use App\cuenta_empresa;

class tacticoController extends Controller
{
    public function  creditoPeriodo()
    {
    	$credito = DB::table('socio')
            ->join('socio_cuenta', 'socio.id_socio', '=', 'socio_cuenta.id_socio')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'socio_cuenta.id_cuenta')
            ->join('credito','credito.id_cuenta','=','cuenta.id_cuenta')
            ->join('tipo','tipo.id_credito','=','credito.id_credito')
            ->select('credito.*', 'socio.nombre', 'socio.tipo_socio','tipo.nombre','credito.monto')
            ->get();
    	$data = [
    		'title' => 'creditos por periodo',
    		'credito' => $credito

    	];

        $pdf = PDF::loadView('tactico.reportes.reporte', $data);

        return $pdf->stream('reporte4.pdf');
    }

    public function estadoCreditoPeriodo()
    {
     $credito = DB::table('credito')
            ->join('tipo', 'credito.id_credito', '=', 'tipo.id_credito')
            ->select('credito.*', 'tipo.nombre', 'credito.estado','credito.monto')
            ->get();
    	$data = [
    		'title' => 'Estado de creditos por periodo',
    		'credito' => $credito

    	];

        $pdf = PDF::loadView('tactico.reportes.reporte1', $data);

        return $pdf->stream('reporte4.pdf'); 

    }

    public function tipoCreditoMasSolicitado()
    {
      $credito = DB::table('credito')
            ->join('tipo', 'credito.id_credito', '=', 'tipo.id_credito')

            ->select('credito.*', 'tipo.nombre', 'tipo.id_credito','credito.monto')
            ->get();
    	$data = [
    		'title' => 'Creditos mas solicitados',
    		'credito' => $credito

    	];

        $pdf = PDF::loadView('tactico.reportes.reporte2', $data);

        return $pdf->stream('reporte4.pdf'); 
    }

    public function  ahorroSolicitados()
    {
    	#falta condicion para saber cuales son los ahorro mas solicitados
     	$credito = DB::table('socio')
            ->join('socio_cuenta', 'socio.id_socio', '=', 'socio_cuenta.id_socio')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'socio_cuenta.id_cuenta')
            ->join('ahorro','ahorro.id_cuenta','=','cuenta.id_cuenta')
            ->select('ahorro.*', 'socio.nombre', 'ahorro.tipo_ahorro','ahorro.tasa','ahorro.monto')
            ->get();
    	$data = [
    		'title' => 'Tipos de Ahorros mas solicitados',
    		'credito' => $credito

    	];

        $pdf = PDF::loadView('tactico.reportes.reporte3', $data);

        return $pdf->stream('reporte4.pdf');
    }

    public function UtilidadesCredito()
    {
      $credito = DB::table('credito')
            ->join('tipo', 'credito.id_credito', '=', 'tipo.id_credito')
            ->select('credito.*', 'tipo.nombre', 'credito.estado','credito.monto','credito.interes')

            ->get();
    	$data = [
    		'title' => 'Utilidades obtenidas por credito',
    		'credito' => $credito

    	];

        $pdf = PDF::loadView('tactico.reportes.reporte4', $data);

        return $pdf->stream('reporte4.pdf'); 
    }

    public function  numeroTransaccion()
    {
     $credito = DB::table('credito')
            ->join('tipo', 'credito.id_credito', '=', 'tipo.id_credito')
            ->select('credito.*', 'tipo.nombre', 'credito.transaccion','credito.monto')

            ->get();
    	$data = [
    		'title' => 'Mayor numero de transacciones segun el tipo de credito',
    		'credito' => $credito

    	];

        $pdf = PDF::loadView('tactico.reportes.reporte5', $data);

        return $pdf->stream('reporte4.pdf'); 
    }

    #previsualizacion de los reportes teacticos
    public function index(Request $request)
    {
         {
        if ($request) {
            
            $ini=trim($request->get('fechainicio'));
            $fin=trim($request->get('fechafinal'));

           $credito = DB::table('socio')
            ->join('socio_cuenta', 'socio.id_socio', '=', 'socio_cuenta.id_socio')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'socio_cuenta.id_cuenta')
            ->join('credito','credito.id_cuenta','=','cuenta.id_cuenta')
            ->join('tipo','tipo.id_credito','=','credito.id_credito')
            ->select('credito.*', 'socio.nombre', 'socio.tipo_socio','tipo.nombre','credito.monto')
            ->get();
            session::flash('creditos', $credito);
            $data = [
            'title' => 'creditos por periodo',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('tactico.previsualizar.previ',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);


        }
      }  
    }
    
    public function index1(Request $request)
    {
         
        if ($request) {
            
            $ini=trim($request->get('fechainicio'));
            $fin=trim($request->get('fechafinal'));

           $credito = DB::table('credito')
            ->join('tipo', 'credito.id_credito', '=', 'tipo.id_credito')
            ->select('credito.*', 'tipo.nombre', 'credito.estado','credito.monto')
            ->get();
            session::flash('creditos', $credito);
            $data = [
            'title' => 'Estado de creditos por periodo',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('tactico.previsualizar.previ1',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);


        }
      
    }

    public function index2(Request $request)
    {
       
        if ($request) {
            
            $ini=trim($request->get('fechainicio'));
            $fin=trim($request->get('fechafinal'));

           $credito = DB::table('credito')
            ->join('tipo', 'credito.id_credito', '=', 'tipo.id_credito')

            ->select('credito.*', 'tipo.nombre', 'tipo.id_credito','credito.monto')
            ->get();
            session::flash('creditos', $credito);
            $data = [
            'title' => 'Tipo de creditos mas solicitados',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('tactico.previsualizar.previ2',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);


        }
      
    }

    public function index3(Request $request)
    {

        if ($request) {
            
            $ini=trim($request->get('fechainicio'));
            $fin=trim($request->get('fechafinal'));

           $credito = DB::table('socio')
            ->join('socio_cuenta', 'socio.id_socio', '=', 'socio_cuenta.id_socio')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'socio_cuenta.id_cuenta')
            ->join('ahorro','ahorro.id_cuenta','=','cuenta.id_cuenta')
            ->select('ahorro.*', 'socio.nombre', 'ahorro.tipo_ahorro','ahorro.tasa','ahorro.monto')
            ->get();
            session::flash('creditos', $credito);
            $data = [
            'title' => 'Tipo de creditos mas solicitados',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('tactico.previsualizar.previ3',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);


        }
    }

    public function index4(Request $request)
    {
        if ($request) {
            
            $ini=trim($request->get('fechainicio'));
            $fin=trim($request->get('fechafinal'));

           $credito = DB::table('credito')
            ->join('tipo', 'credito.id_credito', '=', 'tipo.id_credito')
            ->select('credito.*', 'tipo.nombre', 'credito.estado','credito.monto','credito.interes')

            ->get();
            session::flash('creditos', $credito);
            $data = [
            'title' => 'Utilidades obtenidas por credito',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('tactico.previsualizar.previ4',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);


        }
    }

    public function index5(Request $request)
    {
        if ($request) {
            
            $ini=trim($request->get('fechainicio'));
            $fin=trim($request->get('fechafinal'));

           $credito = DB::table('credito')
            ->join('tipo', 'credito.id_credito', '=', 'tipo.id_credito')
            ->select('credito.*', 'tipo.nombre', 'credito.transaccion','credito.monto')

            ->get();

            session::flash('creditos', $credito);
            $data = [
            'title' => 'mayor numero de transacciones segun tipo de credito',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('tactico.previsualizar.previ5',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);


        }
    }
    

}
