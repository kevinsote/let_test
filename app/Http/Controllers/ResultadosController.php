<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PDF;

class ResultadosController extends Controller
{
    //
    public function store(Request $request)
    {
        //
         \App\Resultados::create([
            'let_st'=>$request['nombre_let'],
            'nomina_let_int'=>$request['nomina_let'],
            'equipo_st'=>$request['equipo'],
            'lgt_st'=>$request['nombre_lgt'],
            'fecha_revision_dt'=>$request['fecha'],
            'comentarios_lntxt'=>$request['comentarios'],
            'calificacion_dbl'=>$request['promedio'],
             'Q1'=>$request['Q1'],
             'Q2'=>$request['Q2'],
             'Q3'=>$request['Q3'],
             'Q4'=>$request['Q4'],
             'Q5'=>$request['Q5'],
             'Q6'=>$request['Q6'],
             'Q7'=>$request['Q7'],
             'Q8'=>$request['Q8'],
             'Q9'=>$request['Q9'],
             'Q10'=>$request['Q10'],
             'Q11'=>$request['Q11'],
             'Q12'=>$request['Q12'],
             'Q13'=>$request['Q13'],
             'Q14'=>$request['Q14'],
             'Q15'=>$request['Q15'],
             'Q16'=>$request['Q16'],
             'Q17'=>$request['Q17'],
             'Q18'=>$request['Q18'],
             'Q19'=>$request['Q19'],
             'Q20'=>$request['Q20'],
             'Q21'=>$request['Q21'],
             'Q22'=>$request['Q22'],
             'Q23'=>$request['Q23'],
             'Q24'=>$request['Q24'],
             'Q25'=>$request['Q25'],
             'Q26'=>$request['Q26'],
             'Q27'=>$request['Q27'],
             'Q28'=>$request['Q28'],
             'Q29'=>$request['Q29'],
             'Q30'=>$request['Q30'],
             'area_st'=>$request['area'],
             'departamento' =>$request['departamento']
            ]);
            $name = $request['nombre_let'];
        
          $variable1 = \App\Resultados::ultimoreg();
                
            $pdf = PDF::loadView('pdf', compact('variable1'));
      return  $pdf->download($name.'.pdf');
     }


     public function busqueda_id($id){
       
        $variable1 = \App\Resultados::buscar_id($id);
        Log::info('varible en controlador');
        Log::info($variable1);
       return view('detalles', compact('variable1'));
     }

     public static function crear_pdf($name){
         $variable1 = \App\Resultados::ultimoreg();
                
            $pdf = PDF::loadView('pdf', compact('variable1'));
      return  $pdf->download($name.'.pdf');
     }
}
