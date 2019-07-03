<!DOCTYPE html>

<html>

<head>

	<title>REPORTES</title>
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
	<script type="text/javascript"></script>
</head>

<body>
    <h1 align="center"> ACUDE DE RL</h1>
    <h1 align="center">Unidad de Ahorro y credito</h1>
	<h1 align="center">{{ $title }}</h1>

	 <h1 align="center">fecha inicio:  24-01-2000</h1>
    <h1 align="center">fecha final:   24-01-2019</h1>
	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Cargo</th>
				<th>transaccion</th>
				<th>Monto</th>

			</tr>
		</thead>
		<tbody>
			@foreach($credito as $creditos)
             <tr>
				<td>{{$creditos->nombre}}</td>
				<td>{{$creditos->cargo}}</td>
				<td>{{$creditos->id_credito}}</td>
				<td>{{$creditos->monto}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
    
</body>	
</html>