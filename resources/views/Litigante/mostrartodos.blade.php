  <!--  iterar sobre los registros y mostrar los valores de los campos deseados -->

@foreach ($registros as $registro)
    <p>{{ $registro->conciliador_id }}</p>
    <p>{{ $registro->nombre_conciliador }}</p>
    <p>{{ $registro->especialidad }}</p>
    <p>{{ $registro->telefono }}</p>
    <p>{{ $registro->correo_electronico }}</p>
    <!-- ... -->
@endforeach

<a href="{{ route('mostrar.registros') }}">Mostrar Registros</a>


