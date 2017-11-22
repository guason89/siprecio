@extends('admin.template.nav') 
@section('page_heading','Usuarios')

@section('css')
<style type="text/css">

</style>
@endsection

@section('section')
<div style="background-color: #E0ECF8;">
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
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-7.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Elizabeth Owens</h4>
					<p class="text-success">@elizabethowens</p>
				  </div>
				  	<div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-danger" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-2.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Thomas White</h4>
					<p class="text-success">@thomaswhite</p>
				  </div>
				    <div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-warning" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-3.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Doina Slaivici</h4>
					<p class="text-success">@doinaslaivici</p>
				  </div>
				  	<div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-primary" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-4.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Harry Nichols</h4>
					<p class="text-success">@harrynichols</p>
				  </div>
				  	<div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-success" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-5.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Mihaela Cihac</h4>
					<p class="text-success">@mihaelacihac</p>
				  </div>
				  	<div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-success" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-5.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Harold Chavez</h4>
					<p class="text-success">@haroldchavez</p>
				  </div>
				  	<div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-success" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-8.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Frank Oliver</h4>
					<p class="text-success">@frankoliver</p>
				  </div>
				  <div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-primary" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-9.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Mya Weastell</h4>
					<p class="text-success">@myaweastell</p>
				  </div>
				  	<div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-danger" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-10.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Carl Rodriguez</h4>
					<p class="text-success">@carlrodriguez</p>
				  </div>
				  	<div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-warning" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-11.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Nikita Carter</h4>
					<p class="text-success">@nikitacarter</p>
				  </div>
				  	<div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-success" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-12.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Craig Dixon</h4>
					<p class="text-success">@craigdixon</p>
				  </div>
				  	<div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-primary" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
		<div class="col-sm-6">
			<!-- BEGIN USER CARD LONG -->
			<div class="the-box no-border">
				<div class="media user-card-sm">
				  <a class="pull-left" href="#fakelink">
					<img class="media-object img-circle" src="{{asset('assets/img/avatar/avatar-13.jpg')}}" alt="Avatar">
				  </a>
				  <div class="media-body">
					<h4 class="media-heading">Mikayla King</h4>
					<p class="text-success">@mikaylaking</p>
				  </div>
				  	<div class="progress progress-striped" style="width: 200px;">
					 	<div class="progress-bar progress-bar-warning" role="progressbar"
					       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
					       style="width: 100%">					    
						</div>
				  	</div>
				</div>
			</div><!-- /.the-box .no-border -->
			<!-- BEGIN USER CARD LONG -->
		</div><!-- /.col-sm-6 -->
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