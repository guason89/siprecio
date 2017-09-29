@extends('admin.template.nav')
@section('title', 'login')

@section('page_heading','Inicio de Sesion')

@section('section')
<div class="col-md-offset-3">
<div class="col-sm-6">
<div class="row">

	{!! Form::open(['route'=>'admin.auth.login', 'method'=>'POST']) !!}
		<div class="form-group">
		{!! Form::label('email','Correo Electronico') !!}
		{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@mail.com']) !!}
		</div>

		<div class="form-group">
		{!! Form::label('password','Contraseña') !!}
		{!! Form::password('password',['class'=>'form-control','placeholder'=>'**************']) !!}
		</div>

		<div class="form-group">
		{!! Form::submit('Ingresar',['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}
</div>
</div>
</div>
@endsection