@extends('admin.template.nav') 
@section('page_heading','Usuarios')

@section('css')
<style type="text/css">

</style>
@endsection

@section('section')
<div style="background-color: #E0ECF8;">
	<h3 class="col-md-12 text-center" style="border-bottom: solid 1px gray;">CALIFICACIÓN QUE LOS USUARIOS DAN AL SITIO</h3><br>
	<div class="row"><br>
		<div class="col-md-6">
			<div class="col-md-6">
				<div class="progress progress-striped" style="width: 200px;">
				 	<div class="progress-bar progress-bar-danger" role="progressbar"
				       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
				       style="width: 100%">					    
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<p>CALIFICACIÓN MALA</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<div class="progress progress-striped" style="width: 200px;">
				 	<div class="progress-bar progress-bar-warning" role="progressbar"
				       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
				       style="width: 100%">					    
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<p>CALIFICACIÓN REGULAR</p>
			</div>
		</div>
	</div>
	<div class="row"><br>
		<div class="col-md-6">
			<div class="col-md-6">
				<div class="progress progress-striped" style="width: 200px;">
				 	<div class="progress-bar progress-bar-primary" role="progressbar"
				       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
				       style="width: 100%">					    
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<p>CALIFICACIÓN BUENA</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<div class="progress progress-striped" style="width: 200px;">
				 	<div class="progress-bar progress-bar-success" role="progressbar"
				       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
				       style="width: 100%">					    
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<p>CALIFICACIÓN EXCELENTE</p>
			</div>
		</div>
	</div>	
</div>

<div class="col-md-12">
	
	<div class="row">
		@foreach($usuarios as $us)
			<div class="col-sm-6" style="margin-top: 15px; border: solid 0.5px gray;">
				<!-- BEGIN USER CARD LONG -->
				<div class="the-box no-border">
					<div class="media user-card-sm">
					  <a class="pull-left" href="#fakelink">
						<img class="media-object img-circle" src="{{asset($us->imagen)}}" alt="Avatar">
					  </a>
					  <div class="media-body">
						<h4 class="media-heading">{{$us->name}}</h4>
						@if(\Auth::user()->type=='admin')
						<p class="text-success">{{$us->email}}</p>
						@else
						<p class="text-success">@mail.com</p>
						@endif
					  </div>
					  	<div class="progress progress-striped" style="width: 200px;">
						 	<div 
						 	@if($us->calificacion==1)
						 		class="progress-bar progress-bar-danger"
						 	@endif
						 	@if($us->calificacion==2)
						 		class="progress-bar progress-bar-warning"
						 	@endif
						 	@if($us->calificacion==3)
						 		class="progress-bar progress-bar-primary"
						 	@endif
						 	@if($us->calificacion==4)
						 		class="progress-bar progress-bar-success"
						 	@endif
						 	 
						 	role="progressbar"
						       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
						       style="width: 100%">					    
							</div>
					  	</div>
					  	<div class="media-body">
						<P>{{$us->observacion}}</P>
					  </div>
					</div>
				</div><!-- /.the-box .no-border -->
				<!-- BEGIN USER CARD LONG -->
			</div><!-- /.col-sm-6 -->
		@endforeach
	</div><!-- /.row -->
	</div><!-- /.col-md-8 -->
@endsection

@section('js')
<script type="text/javascript">
	$(".btn-success").click(function(event){
		alert('asdlfjklsadf');
	});
</script>

@endsection