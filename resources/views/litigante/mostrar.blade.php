<!-- resources/views/nombre_vista.blade.php -->

@extends('template.layout')
@section('titleGeneral', 'Lista de Litigantes ...')
@section('sectionMostrar')

<!--Configuración de Css para la tabla-->
<style>
    .table-striped thead th {
        background-color: green; /* Color verde para el encabezado */
        color: white; /* Texto en color blanco en el encabezado */
    }

    .table-striped tbody tr:nth-child(even) {
        background-color: #f2f2f2; /* Color para las filas pares */
    }

    .table-striped tbody tr:nth-child(odd) {
        background-color: #ffffff; /* Color para las filas impares */
    }
</style>

<table class="table table-striped">
    <!-- Encabezado de la tabla -->
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

    <!-- Contenido de la tabla -->
    <tbody>
        <!--?php dd($listLitigante); ?--> <!-- (Para verificar los datos) Depurar o inspeccionar-->
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

