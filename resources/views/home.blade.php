@extends('layouts.app')

@section('content')


<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

        <div class="container">
        <h1>Búsqueda de resultados</h1>

      <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Ingresa lo que deseas Buscar...">
      </div>

        <table class="table table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Nómina</th>
            <th>Equipo</th>
            <th>LGT</th>
            <th>Fecha</th>
            <th>Area</th>
            <th>Departamento</th>            
            <th>Calificación</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody class="buscar">
     @foreach ($resultados as $filas)
        <tr>
            <td>
                {{$filas->let_st}}
            </td>
            <td>
                {{$filas->nomina_let_int}}
            </td>
            <td>
                {{$filas->equipo_st}}
            </td>
            <td>
                {{$filas->lgt_st}}
            </td>
            <td>
                {{$filas->fecha_revision_dt}}
            </td>
            <td>
                {{$filas->area_st}}
            </td>
            <td>
                {{$filas->departamento}}
            </td>
            <td>
                {{$filas->calificacion_dbl}}
            </td>
            <td>
                <a href="/more/{{$filas->id}}">Ver más</a>
            </td>
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

<script type="text/javascript">
        $(document).ready(function () {

            (function ($) {

                $('#filtrar').keyup(function () {

                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();

                })

            }(jQuery));

        });
      </script>    
@endsection
