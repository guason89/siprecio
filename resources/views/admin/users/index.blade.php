@extends('admin.template.nav')
@section('page_heading','Usuarios')
@section('section')

<div class="col-md-offset-2">
<div class="col-sm-10">
<div class="row">
	<a href="{{ route('admin.users.create') }}" class="btn btn-info"> Registrar Nuevo Usuario</a>
	<table class="table table-striped">
		<thead>
			<td>Id</td>
			<td>Nombre</td>
			<td>Tipo</td>
			<td>Accion</td>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>
						@if($user->type == 'admin')
							<span class="label label-danger">{{$user->type}}</span>
						@else
							<span class="label label-primary">{{$user->type}}</span>
						@endif
					</td>
					<td><a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('Seguro que desea eliminar?') " class="btn btn-danger">Eliminar
						<span class="glyphicon glyphicon-trash"></span>
					</a><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Editar <span class="glyphicon glyphicon-edit"></span></a></td>

				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $users->render()!!}
</div>
</div>
<div>
@endsection