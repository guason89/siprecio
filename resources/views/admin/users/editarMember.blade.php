@extends('admin.template.nav')

@section('page_heading','Editar Usuario: ' . $user->name )

@section('section')
<div class="col-md-offset-2">
<div class="col-sm-10">
<div class="row">

{!! Form::open(['route'=>['admin.users.update', $user],'method'=>'PUT']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre Completo','required'])  !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Correo Electronico') !!}
		{!! Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'example@gmail.com','required'])  !!}
	</div>

	<div class="col-sm-10">
	<div class="row">
	<div class="form-group">
		{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
	</div>
	</div>
	</div>


{!! Form::close() !!}
</div>
</div>
</div>

@endsection