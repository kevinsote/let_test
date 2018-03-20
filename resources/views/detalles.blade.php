@extends('layouts.app')

@section('content')


<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{ url('/home') }}">Regresar</a></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

        <div class="container">
        <table class="table table-hover">
        <tbody class="buscar">
            @foreach($variable1 as $variable)
        <tr>
           <td>Nombre</td>
           <td>{{$variable->let_st}}</td>
        </tr>
        <tr>
           <td>Nomina</td>
           <td>{{$variable->nomina_let_int}}</td>
        </tr>
        <tr>
           <td>Equipo</td>
           <td>{{$variable->equipo_st}}</td>
        </tr>
        <tr>
           <td>LGT</td>
           <td>{{$variable->lgt_st}}</td>
        </tr>
        <tr>
           <td>Área</td>
           <td>{{$variable->area_st}}</td>
        </tr>

        <tr>
           <td>Fecha</td>
           <td>{{$variable->fecha_revision_dt}}</td>
        </tr>
        <tr>
           <td>Preguntas</td>
        </tr>
        <tr>
           <td>Es flexible y se adapta fácilmente a los cambios en los procesos</td>
           <td>{{$variable->Q1}}</td>
        </tr>
        <tr>
           <td>Agota todos los recursos a fin de encontrar soluciones.</td>
           <td>{{$variable->Q2}}</td>
        </tr>
        <tr>
           <td> Toma decisiones positivas, su esfuerzo se ve reflejado en el cumplimiento de los objetivos, logra tener confianza y respeto con el equipo</td>
           <td>{{$variable->Q3}}</td>
        </tr>
        <tr>
           <td>Motiva al equipo para realizar su trabajo de la mejor manera y hace sentir a su equipo que su trabajo es importante</td>
           <td>{{$variable->Q4}}</td>
        </tr>
        <tr>
           <td>Inculca el ánimo y espiritu en el equipo; comparte los triunfos; promueve el dialogo abierto y franco; define el éxito como producto del trabajo en equipo.</td>
           <td>{{$variable->Q5}}</td>
        </tr>
        <tr>
           <td>
Identifica y corrige condiciones y actos inseguros mediante (Tarjetas CAR, Recorridos de Seguridad y Auditorías de Seguridad)</td>
           <td>{{$variable->Q6}}</td>
        </tr>
        <tr>
           <td>Asegura el Análisis de Riesgos en su Equipo de Trabajo de Alto Desempeño</td>
           <td>{{$variable->Q7}}</td>
        </tr>
        <tr>
           <td>Apoya a su punta estrella de Seguridad para la asistencia a los Recorridos y Juntas de Seguridad, asi como en la entrega de su EPP al equipo</td>
           <td>{{$variable->Q8}}</td>
        </tr>
        <tr>
           <td>Entrena a los MET´s en la documentación de trabajo estandarizado</td>
           <td>{{$variable->Q9}}</td>
        </tr>
        <tr>
           <td>Apoya la Asistencia a los entrenamientos establecidos (GMS, Seguridad, Técnicos, etc.)</td>
           <td>{{$variable->Q10}}</td>
        </tr>
        <tr>
           <td>Conoce y Domina todas las Operaciones de su Equipo de Trabajo de Alto Desempeño (4° Cuadrantes)</td>
           <td>{{$variable->Q11}}</td>
        </tr>
        <tr>
           <td>Asegura que los documentos de soporte a la Operación (Pino, JIT, Carpeta de Equipo, etc.) se encuentren actualizados</td>
           <td>{{$variable->Q12}}</td>
        </tr>
        <tr>
           <td>Coordina y Liderea las Juntas de Equipos de Trabajo, Juntas de Inicio de Turno (incluyendo plática de seguridad) y entrega de turno</td>
           <td>{{$variable->Q13}}</td>
        </tr>
        <tr>
           <td>Asegura que su Equipo de Trabajo de Alto Desempeño viva (entienda y aplique) el Proposito y Valores</td>
           <td>{{$variable->Q14}}</td>
        </tr>
        <tr>
           <td>Asegura la Participación de su Equipo de Trabajo de Alto Desempeño en Ideas y Mejoras</td>
           <td>{{$variable->Q15}}</td>
        </tr>
        <tr>
           <td>Previene y Soluciona problemas dentro del Equipo de Trabajo y Escala con otros LETs o LGT en caso de ser necesario.</td>
           <td>{{$variable->Q16}}</td>
        </tr>
        <tr>
           <td>Promueve y Cumple el Reglamento Interior de Trabajo</td>
           <td>{{$variable->Q17}}</td>
        </tr>
        <tr>
           <td>Genera confianza predicando con el Ejemplo</td>
           <td>{{$variable->Q18}}</td>
        </tr>
        <tr>
           <td>Asegura los Sistemas que garantizan la Calidad ( Error Proofing, 5FVS, ANDON, Plan de Control, PVC, Etc) para que se cumplan efectivamente</td>
           <td>{{$variable->Q19}}</td>
        </tr>
        <tr>
           <td>Ejecuta y Da Seguimiento a las Auditorias Escalonadas y Work Station Readiness</td>
           <td>{{$variable->Q20}}</td>
        </tr>
        <tr>
           <td>Atiende Areas de Control ( Preventivo ) y de Inspección ( Reactivo ) ( VS, FTQ ) para evaluación de resultados y ejecución de plan de reacción de ser necesario</td>
           <td>{{$variable->Q21}}</td>
        </tr>
        <tr>
           <td>
Soporta el proceso de Mejora de Rendimiento y Productividad TIP (Throughput Improvement Process) PIP (Productivity Improvement Process)</td>
           <td>{{$variable->Q22}}</td>
        </tr>
        <tr>
           <td>Promueve , Participa e Implementa Iniciativas de mejora continua en su equipo.</td>
           <td>{{$variable->Q23}}</td>
        </tr>
        <tr>
           <td>Atiende llamados de Andon, contiene y/o soluciona y escala el problema de ser necesario.</td>
           <td>{{$variable->Q24}}</td>
        </tr>
        <tr>
           <td>Define y Controla las necesidades del equipo de trabajo en cuanto a recursos materiales ( Cuentas 2000's, 3000's, 5000's, 7000's ).</td>
           <td>{{$variable->Q25}}</td>
        </tr>
        <tr>
           <td>Identifica y Elimina el desperdicio de su equipo de trabajo.</td>
           <td>{{$variable->Q26}}</td>
        </tr>
        <tr>
           <td>Controla y da Seguimiento a la Documentación para la eliminación del desperdicio ( COMMWIP ) a través del sistema de ideas y mejoras.</td>
           <td>{{$variable->Q27}}</td>
        </tr>
        <tr>
           <td>Asegura que el equipo cuente con las Facilidades adecuadas para la segregación de residuos y manejo correcto de materiales químicos.</td>
           <td>{{$variable->Q28}}</td>
        </tr>
        <tr>
           <td>Asegura la correcta segregación de residuos, ahorro de energía y uso correcto de materiales químicos.</td>
           <td>{{$variable->Q29}}</td>
        </tr>
        <tr>
           <td>Reporta Inmediatamente cualquier incidente ambiental ( fugas de aire, refrigerante, agua, iluminación innecesaria, etc ).</td>
           <td>{{$variable->Q30}}</td>
        </tr>
        <tr>
           <td>Comentarios</td>
           <td>{{$variable->comentarios_lntxt}}</td>
        </tr>
        <tr>
           <td>Calificación final</td>
           <td>{{$variable->calificacion_dbl}}</td>
        </tr>
     @endforeach





        </tbody>
      </table>

    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection