<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evaluación LETS</title>
         <link rel="shortcut icon" href="{{asset('imagenes/logo-favicon.jpg')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
     

    <link rel="stylesheet" href="/css/bootstrap.css"/>

    <link rel="stylesheet" href="/css/bootstrap.mim.css"/>

    <link rel="stylesheet" href="/css/bootstrap-grid.css"/>

    <link rel="stylesheet" href="/css/bootstrap-grid.min.css"/>

    <link rel="stylesheet" href="/css/bootstrap-reboot.css"/>

    <link rel="stylesheet" href="/css/bootstrap-reboot.min.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://use.fontawesome.com/2920296aea.js"></script>

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }


            th, tr, td, h3, legend{
                color:black;
                 font-weight: bold;
            }

            option{
                color:black;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 30px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            select { color:black; }
            option { color:black;
                    font-weight: bold; }
             
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Ingresar</a>
                        
                    @endauth
                </div>
            @endif

            <div class="container">
              <div class="row"><br><br><br><br><br><br><br><br><br><br><br></div>
              <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-4">
                  <img src="imagenes/logo-favicon.jpg" style="width: 150px">
                </div>
              </div>
             
              <br><br>

                <form class="form-horizontal" name="menu" action="/carga" method="post"  >
                    {{ csrf_field() }}
                    <label>Nombre LET</label>
                    <input type="text" name="nombre_let" required style="font-weight: bold; color: black;">
                    <label>Nomina LET</label>
                    <input type="number" name="nomina_let" required style="font-weight: bold; color: black;">
                    <label>Equipo</label>
                    <input type="text" name="equipo" required style="font-weight: bold; color: black;">
                    <label>Fecha</label>
                    <input type="date" name="fecha" required style="font-weight: bold; color: black;">
                    <br>
                     <label>Nombre LGT</label>
                    <input type="text" name="nombre_lgt" required style="font-weight: bold; color: black;">
                    <label>Área</label>
                 <select name="area" required>
                                        <option value="" selected disabled hidden>Escoge una opción</option>
                                        <option value="Ensamble General">Ensamble General</option>
                                        <option value="Carrocerías">Carrocerías</option>
                                        <option value="Calidad">Calidad</option>
                                        <option value="Estampado">Estampado</option>
                                        <option value="Pintura">Pintura</option>
                                        <option value="Secuenciados">Secuenciados</option>
                                        <option value="Transmisiones GF6">Transmisiones GF6</option>
                                        <option value="Transmisiones FG9">Transmisiones GF9</option>
                                    </select>
                        <label>Departamento</label>
                        <input type="text" name="departamento" required style="font-weight: bold; color: black;">

                    <br>
                    <br>
                    <div class="row">
                      <div class="col-md-6">
                    <label>Instrucciones: En una escala del 1 al 3 , evalúe al  LET en cada una de los siguientes enunciados.</label>
                  </div>
                  <div class="col-md-6">
                    <img src="/imagenes/eval.jpg" width="250px">
                    </div> 
                    </div>
                    <div style="overflow: auto; width:100%; height:500px;">
                        <div class="table-responsive">
                            <table class="table table-sm">
                              <tbody>
                                <tr>
                                  <td>Aprendizaje al vuelo.</td>
                                  <td>Es flexible y se adapta fácilmente a los cambios en los procesos</td>
                                  <td><select  name="Q1" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Solución de Problemas</td>
                                  <td>Agota todos los recursos a fin de encontrar soluciones.</td>
                                  <td><select name="Q2" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1" >1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Enfonque al Cliente</td>
                                  <td>Toma decisiones positivas, su esfuerzo se ve reflejado en el cumplimiento de los objetivos, logra tener confianza y respeto con el equipo</td>
                                  <td><select name="Q3" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Motivación</td>
                                  <td>Motiva al equipo para realizar su trabajo de la mejor manera y hace sentir a su equipo que su trabajo es importante </td>
                                  <td><select name="Q4" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                 <tr>
                                  <td>Construción de Equipos Efectivos</td>
                                  <td>Inculca el ánimo y espiritu en el equipo; comparte los triunfos; promueve el dialogo abierto y franco; define el éxito como producto del trabajo en equipo.</td>
                                  <td><select name="Q5" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                            <table class="table table-sm">
                              <tbody>
                                <tr>
                                  <td>Identifica y corrige condiciones y actos inseguros mediante (Tarjetas CAR, Recorridos de Seguridad y Auditorías de Seguridad)</td>
                                  <td><select name="Q6" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Asegura el Análisis de Riesgos en su Equipo de Trabajo de Alto Desempeño</td>
                                  <td><select name="Q7" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1" >1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Apoya a su punta estrella de Seguridad para la asistencia a los Recorridos y Juntas de Seguridad, asi como en la entrega de su EPP al equipo.</td>
                                  <td><select name="Q8" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                            <table class="table table-sm">
                              <tbody> 
                                <tr>
                                  <td>Entrena a los MET´s en la documentación de trabajo estandarizado</td>
                                  <td><select name="Q9" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Apoya la Asistencia a los entrenamientos establecidos (GMS, Seguridad, Técnicos, etc.)</td>
                                  <td><select name="Q10" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1" >1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Conoce y Domina todas las Operaciones de su Equipo de Trabajo de Alto Desempeño  (4° Cuadrantes)</td>
                                  <td><select name="Q11" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Asegura que los documentos de soporte a la Operación (Pino, JIT, Carpeta de Equipo, etc.) se encuentren actualizados</td>
                                  <td><select name="Q12" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Coordina y Liderea las Juntas de Equipos de Trabajo, Juntas de Inicio de Turno (incluyendo plática de seguridad) y entrega de turno</td>
                                  <td><select name="Q13" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Asegura que su Equipo de Trabajo de Alto Desempeño viva (entienda y aplique) el Proposito y Valores</td>
                                  <td><select name="Q14" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1" >1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Asegura la Participación de su Equipo de Trabajo de Alto Desempeño en Ideas y Mejoras</td>
                                  <td><select name="Q15" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Previene y Soluciona problemas dentro del Equipo de Trabajo y Escala con otros LETs o LGT  en caso de ser necesario.</td>
                                  <td><select name="Q16" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Promueve y Cumple el Reglamento Interior de Trabajo</td>
                                  <td><select name="Q17" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Genera confianza predicando con el Ejemplo</td>
                                  <td><select name="Q18" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                            <table class="table table-sm">
                              <tbody>
                                <tr>
                                  <td>Asegura los Sistemas que garantizan la Calidad ( Error Proofing, 5FVS, ANDON, Plan de Control, PVC,  Etc) para que se cumplan efectivamente</td>
                                  <td><select name="Q19" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Ejecuta y Da Seguimiento a las Auditorias Escalonadas y Work Station Readiness</td>
                                  <td><select name="Q20" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1" >1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Atiende Areas de Control ( Preventivo ) y de Inspección ( Reactivo ) ( VS, FTQ ) para evaluación de resultados y ejecución de plan de reacción de ser necesario</td>
                                  <td><select name="Q21" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                            <table class="table table-sm">
                              <tbody>
                                <tr>
                                  <td>Soporta el proceso de Mejora de Rendimiento y Productividad TIP (Throughput Improvement Process) PIP (Productivity Improvement Process)</td>
                                  <td><select name="Q22" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Promueve , Participa e Implementa Iniciativas de mejora continua en su equipo.</td>
                                  <td><select name="Q23" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1" >1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Atiende llamados de Andon, contiene y/o soluciona y escala el problema de ser necesario.</td>
                                  <td><select name="Q24" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                            <table class="table table-sm">
                              <tbody>
                                  <td>Define y Controla las necesidades del equipo de trabajo en cuanto a recursos materiales ( Cuentas 2000's, 3000's, 5000's, 7000's ).</td>
                                  <td><select name="Q25" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Identifica y Elimina el desperdicio de su equipo de trabajo.</td>
                                  <td><select name="Q26" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1" >1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Controla y da Seguimiento a la Documentación para la eliminación del desperdicio ( COMMWIP ) a través del sistema de ideas y mejoras.</td>
                                  <td><select name="Q27" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                            <table class="table table-sm">
                              <tbody>
                                <tr>
                                  <td>Asegura que el equipo cuente con las Facilidades adecuadas para la segregación de residuos y manejo correcto de materiales químicos.</td>
                                  <td><select name="Q28" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Asegura la correcta segregación de residuos, ahorro de energía y uso correcto de materiales químicos.</td>
                                  <td><select name="Q29" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1" >1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                                <tr>
                                  <td>Reporta Inmediatamente cualquier incidente ambiental ( fugas de aire, refrigerante, agua, iluminación innecesaria, etc ).</td>
                                  <td><select name="Q30" name="selectbasic" onchange="myFunction()">
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                </select>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                   </div>
                   <br>
                   <br>
                <div class="row">
                    <div class="col-md-9">
                        <label>Comentarios generales</label>
                        <textarea name="comentarios" rows="1" cols="50" style="font-weight: bold; color: black;" required></textarea>
                         <table >
                        
                          <tr><td>Competencias</td><td><input type="text" name="com" style="width: 30px"></td></tr>
                          <tr><td>Seguridad</td><td><input type="text" name="seg" style="width: 30px"></td></tr>
                          <tr><td>Gente</td><td><input type="text" name="gen" style="width: 30px"></td></tr>
                          <tr><td>Calidad</td><td><input type="text" name="cal" style="width: 30px"></td></tr>
                          <tr><td>Respuesta</td><td><input type="text" name="res" style="width: 30px"></td></tr>
                          <tr><td>Costo</td><td><input type="text" name="cos" style="width: 30px"></td></tr>
                          <tr><td>Ambiente</td><td><input type="text" name="amb" style="width: 30px"></td></tr>
                        
                      </table>
                    </div>  
                    <div class="col-md-1" style="text-align: right; font-weight: bold; color: black;"> Calificación final
                    </div>
                   <div class="col-md-1">
                       <input type="text" name="promedio" style="font-weight: bold; color: black; text-align: right;" >
                        <img src="/imagenes/fin.jpg" width="250px">
                   </div> 
                </div>
                <div class="row">
                    <div class="col-md-6">
                     
                    </div>
                    <div class="col-md-4"><input type="submit" value="Calificar" style="font-weight: bold; color: black;">&nbsp &nbsp<input type="reset" value="Limpiar campos" style="font-weight: bold; color: black;"></div>
                </div>
                <div class="row">
                  <div class="col-md-8"></div>
                  <div class="col-md-2">
                    <footer style="font-weight: bold; color: black;">Developed by <a href="mailto:kevincesar.garciachavira@gm.com" target="_top">KevinGC</a></footer>
                  </div>
                </div>
               </form>           
        </div>
        
    </body>
    <script type="text/javascript">
function myFunction() {
    var califi = (eval(document.menu.Q1.value) + eval(document.menu.Q2.value) + eval(document.menu.Q3.value) + eval(document.menu.Q4.value) + eval(document.menu.Q5.value) + eval(document.menu.Q6.value) + eval(document.menu.Q7.value) + eval(document.menu.Q8.value) + eval(document.menu.Q9.value) + eval(document.menu.Q10.value) + eval(document.menu.Q11.value) + eval(document.menu.Q12.value) + eval(document.menu.Q13.value) + eval(document.menu.Q14.value) + eval(document.menu.Q15.value) + eval(document.menu.Q16.value) + eval(document.menu.Q17.value) + eval(document.menu.Q18.value) + eval(document.menu.Q19.value) + eval(document.menu.Q20.value) + eval(document.menu.Q21.value) + eval(document.menu.Q22.value) + eval(document.menu.Q23.value) + eval(document.menu.Q24.value) + eval(document.menu.Q25.value) + eval(document.menu.Q26.value) + eval(document.menu.Q27.value) + eval(document.menu.Q28.value) + eval(document.menu.Q29.value) + eval(document.menu.Q30.value))/30;
  //  alert(calif);
  var calif = califi.toFixed(2);
  document.menu.promedio.value = calif;

var cali_com = (eval(document.menu.Q1.value) + eval(document.menu.Q2.value) + eval(document.menu.Q3.value) + eval(document.menu.Q4.value) +             eval(document.menu.Q5.value))/5;

var cali_seg = (eval(document.menu.Q6.value) + eval(document.menu.Q7.value) + eval(document.menu.Q8.value))/3;

var cali_gen = (eval(document.menu.Q9.value) + eval(document.menu.Q10.value) + eval(document.menu.Q11.value) + eval(document.menu.Q12.value) +            eval(document.menu.Q13.value) + eval(document.menu.Q14.value) + eval(document.menu.Q15.value) + eval(document.menu.Q16.value) +            eval(document.menu.Q17.value) + eval(document.menu.Q18.value))/10;

var cali_cal = (eval(document.menu.Q19.value) + eval(document.menu.Q20.value) + eval(document.menu.Q21.value))/3;

var cali_res = (eval(document.menu.Q22.value) + eval(document.menu.Q23.value) + eval(document.menu.Q24.value))/3;

var cali_cos = (eval(document.menu.Q25.value) + eval(document.menu.Q26.value) + eval(document.menu.Q27.value))/3;

var cali_amb = (eval(document.menu.Q28.value) + eval(document.menu.Q29.value) + eval(document.menu.Q30.value))/3;

var cal_com = cali_com.toFixed(2);
var cal_seg = cali_seg.toFixed(2);
var cal_gen = cali_gen.toFixed(2);
var cal_cal = cali_cal.toFixed(2);
var cal_res = cali_res.toFixed(2);
var cal_cos = cali_cos.toFixed(2);
var cal_amb = cali_amb.toFixed(2);

document.menu.com.value = cal_com;
document.menu.seg.value = cal_seg;
document.menu.gen.value = cal_gen;
document.menu.cal.value = cal_cal;
document.menu.res.value = cal_res;
document.menu.cos.value = cal_cos;
document.menu.amb.value = cal_amb;

}

    </script>
</html>
