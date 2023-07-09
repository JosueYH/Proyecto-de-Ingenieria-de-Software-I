@extends('template.layout')
@section('titleGeneral', Editando Registro de Litigantes ...')

<form action="{{ route('registros.update', $registro->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Campos del formulario con los valores prellenados -->
    <input type="text" name="Nombre" value="{{ $registro->nombre_parte }}">
    <input type="text" name="Direccion" value="{{ $registro->direccion }}">
    <input type="text" name="Telefono" value="{{ $registro->telefono }}">
    <input type="text" name="Correo" value="{{ $registro->correo_electronico }}">
    <!-- Otros campos -->
    <button type="submit">Guardar cambios</button>
</form>


