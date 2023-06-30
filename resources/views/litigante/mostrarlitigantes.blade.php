<!-- resources/views/nombre_vista.blade.php -->

@extends('template.layout')
@section('titleGeneral', 'Lista de Litigantes ...')
@section('sectionGeneral')

<table class="table table-striped">
	<thead>
		<tr>
			<th>Identificador</th>
            <th>Nombre</th>
            <th>Especialidad</th>
            <!-- Agrega aquí más columnas si es necesario -->
		</tr>
	</thead>
    <tbody>
        <!--@foreach($listLitigante as $value)-->
        @foreach($listLitigante as $value)
			<tr>
				<td>{{$value->conciliador_id}}</td>
                <td>{{$value->nombre_conciliador}}</td>
                <td>{{$value->especialidad}}</td>
                <!-- Agrega aquí las celdas adicionales correspondientes a cada columna -->
			</tr>
		@endforeach
	</tbody>
</table>
@endsection

