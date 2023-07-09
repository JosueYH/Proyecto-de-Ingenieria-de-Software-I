

<form action="{{ route('registros.destroy', $registro->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>

