<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
#use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use PDF;
use App\Socio;
use App\Ahorro;
class SocioAhorroMenorMilController extends Controller
{
    //
     

     public function  generatePDF()
    {
        $credito = DB::table('socio')
            ->join('socio_cuenta', 'socio.id_socio', '=', 'socio_cuenta.id_socio')
            ->join('cuenta', 'cuenta.id_cuenta', '=', 'socio_cuenta.id_cuenta')
            ->join('ahorro','ahorro.id_cuenta','=','cuenta.id_cuenta')
            ->select('ahorro.*', 'socio.nombre', 'ahorro.tipo_ahorro')
            ->get();
    	$data = [
            'title' => 'socio con ahorros menores a $1000',

            'credito' => $credito
    ];

        $pdf = PDF::loadView('estrategico.parametros.parametros3', $data);

  

        return $pdf->stream('reporte2.pdf');
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
            ->select('ahorro.*', 'socio.nombre', 'ahorro.tipo_ahorro')
            ->get();
            session::flash('creditos', $credito);
            $data = [
            'title' => 'Socios con Ahorros menores a $1000',
            'credito' => $credito

        ];

            #->paginate(7);
            return view('estrategico.previaParametros.previa3',[$credito, "fechainicio"=>$ini, "fechafinal"=>$fin],$data);
            

        }
    }
}
