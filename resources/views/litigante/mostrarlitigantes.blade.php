<!-- resources/views/nombre_vista.blade.php -->

@extends('template.layout')
@section('titleGeneral', 'Lista de Litigantes ...')
@section('sectionGeneral')

<table class="table table-striped">
	<thead>
		<tr>
			<th>Identificador</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <!-- Agrega aquí más columnas si es necesario -->
		</tr>
	</thead>
    <tbody>
        @foreach($listLitigante as $value)
			<tr>
				<td>{{$value->litigante_id}}</td>
                <td>{{$value->nombre_parte}}</td>
                <td>{{$value->direccion}}</td>
                <!-- Agrega aquí las celdas adicionales correspondientes a cada columna -->
			</tr>
		@endforeach
	</tbody>
</table>
@endsection

