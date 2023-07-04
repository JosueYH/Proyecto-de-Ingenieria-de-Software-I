@extends('template.layout')
@section('titleGeneral', 'Registrar Litigantes...')
@section('sectionGeneral')

<form id="frmLitiganteInsert" action="{{url('litigante/insertar')}}" method="post">
	<div class="row">
		<div class="col-md-12 form-group">
			<label for="">Nombre</label>
            <input type="text" name="txtname" class="form-control">
        	<label for="">Dirección</label>
            <input type="text" name="txtaddress" class="form-control">
        	<label for="">Telefono</label>
            <input type="text" name="txtphone" class="form-control">
        	<label for="">Email</label>
            <input type="text" name="txtemail" class="form-control">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12 text-right">
			<button type="submit" class="btn btn-primary">Registrar datos</button>
		</div>
	</div>
</form>
@endsection

