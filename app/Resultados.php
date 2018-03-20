<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Log;

class Resultados extends Model
{
    //
    protected $table = "resultados";
    protected $fillable = ['let_st','nomina_let_int','equipo_st','lgt_st','fecha_revision_dt','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','Q22','Q23','Q24','Q25','Q26','Q27','Q28','Q29','Q30','comentarios_lntxt','calificacion_dbl','area_st','departamento'];


    public static function todo()
    {
    	return DB::table('resultados')
        ->select('id','let_st','nomina_let_int','equipo_st','lgt_st','fecha_revision_dt','calificacion_dbl','area_st','departamento')->get();
    }

    public static function buscar_id($id){

    	$con = DB::table('resultados')
        ->select('let_st','nomina_let_int','equipo_st','lgt_st','fecha_revision_dt','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','Q22','Q23','Q24','Q25','Q26','Q27','Q28','Q29','Q30','comentarios_lntxt','calificacion_dbl','area_st','departamento')
        ->where('id','=',$id)
        ->get();

        Log::info('varible en modelo');
        Log::info($con);
        return $con;
    }

       public static function ultimoreg(){
      //  var_dump($id1);
        
        return DB::table('resultados')
        ->select('*')
        ->orderby('created_at','DESC')->take(1)->get();    
}
}
