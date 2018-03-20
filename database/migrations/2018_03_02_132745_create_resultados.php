<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('resultados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('let_st');
            $table->integer('nomina_let_int');
            $table->string('equipo_st');
            $table->string('lgt_st');
            $table->date('fecha_revision_dt');
            $table->integer('Q1');
            $table->integer('Q2');
            $table->integer('Q3');
            $table->integer('Q4');
            $table->integer('Q5');
            $table->integer('Q6');
            $table->integer('Q7');
            $table->integer('Q8');
            $table->integer('Q9');
            $table->integer('Q10');
            $table->integer('Q11');
            $table->integer('Q12');
            $table->integer('Q13');
            $table->integer('Q14');
            $table->integer('Q15');
            $table->integer('Q16');
            $table->integer('Q17');
            $table->integer('Q18');
            $table->integer('Q19');
            $table->integer('Q20');
            $table->integer('Q21');
            $table->integer('Q22');
            $table->integer('Q23');
            $table->integer('Q24');
            $table->integer('Q25');
            $table->integer('Q26');
            $table->integer('Q27');
            $table->integer('Q28');
            $table->integer('Q29');
            $table->integer('Q30');
            $table->longText('comentarios_lntxt');
            $table->double('calificacion_dbl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('resultados');
    }
}
