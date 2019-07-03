@extends ('layouts.admin')
@section ('contenido')
<style type="text/css">
		
		th {
            background-color: #b3adac;
            color: white;
			}
			th, td {
            border-bottom: 1px solid #ddd;
            }
            table {
            	width: 100%;
            }
	</style>
      <h1 align="center"> ACUDE DE RL</h1>
    <h1 align="center">Unidad de Ahorro y credito</h1>
      <h1 align="center"> {{ $title }} </h1>
   <!-- <h1 align="center"> fecha de inicio:{{$credito[0]->fechainicio}}</h1>
    <h1 align="center"> fecha de final:{{$credito[0]->fechafinal}}</h1>
    -->
    <div>
    {!!Form::open(array('url'=>'estrategico.previaParametros.previa','method'=>'GET'))!!}
    <center>
      <label>Fecha Inicio</label>
      <input type="data" class="form-control" name="fechainicio" placeholder="Buscar..." value="{{$fechainicio}}" required=""><br><br>
      <label>Fecha Final</label>
      <input type="data" class="form-control" name="fechainicio" placeholder="Buscar..." value="{{$fechafinal}}" required=""><br><br>

    </center>
    {{Form::close()}}
    <!--  <table >
            <thead>
                  <tr>
                        <th>Tipo de credito</th>
                        <th>Utilidad</th>
                        
                  </tr>
            </thead>
            <tbody>
                  @foreach($credito as $creditos)
             <tr>
                        <td>{{$creditos->nombre}}</td>
                        <td>{{$creditos->monto*$creditos->interes}}</td>
                        
                  </tr>
                  @endforeach
            </tbody>
      </table>
-->
      <br>
      <a href="{{('reporte4-pdf')}}"><button class="btn btn-info">Generar reporte</button></a>

@endsection