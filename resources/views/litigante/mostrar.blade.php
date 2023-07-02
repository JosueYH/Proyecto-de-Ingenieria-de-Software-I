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
            <th>Telefono</th>
            <th>Correo</th>
            <!-- Agrega aquí más columnas si es necesario -->
		</tr>
	</thead>
    <tbody>
        <?php dd($listLitigante); ?> <!-- (Para verificar los datos) Depurara o inspeccionar-->
        @foreach($listLitigante as $value)
			<tr>
				<td>{{$value->litigante_id}}</td>
                <td>{{$value->nombre_parte}}</td>
                <td>{{$value->direccion}}</td>
                <td>{{$value->telefono}}</td>
                <td>{{$value->correo_electronico}}</td>
                <!-- Agrega aquí las celdas adicionales correspondientes a cada columna -->
			</tr>
		@endforeach
	</tbody>
</table>
@endsection

