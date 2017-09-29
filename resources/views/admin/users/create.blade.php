@extends('admin.template.nav')
@section('page_heading','Registro de Usuario')
@section('section')
	@if(count($errors)>0)
	<div class="alert alert-danger" role="alert">
		<ul>
		@foreach($errors->all() as $error)
			<li>
				{{ $error }}
			</li>
		@endforeach
		</ul>
	</div>
	@endif

	<div class="col-md-offset-3">
<div class="col-sm-6">
<div class="row">


{!! Form::open(['route'=>'admin.users.store','method'=>'POST']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Completo','required'])  !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Correo Electronico') !!}
		{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com','required'])  !!}
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Contraseña') !!}
		{!! Form::password('password',['class'=>'form-control','placeholder'=>'**************','required'])  !!}
	</div>

	<div class="form-group">
		{!! Form::label('type', 'Tipo') !!}
		{!! Form::select('type',[''=>'Seleccione un nivel','member'=>'Miembro','admin'=>'Administrador'], null,['class'=>'form-control'])  !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
	</div>


{!! Form::close() !!}
</div>
</div>
</div>

@endsection