@extends('admin.template.nav') 
@section('page_heading','Calificar')

@section('css')
<style type="text/css">

</style>
@endsection

@section('section')
<div class="panel with-nav-tabs panel-success">
  <div class="panel-heading">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#" data-toggle="tab"><b>Calificar sitio</b></a></li>
  </ul>
  </div>
  <div id="panel-collapse-info" class="collapse in">
    <form action="{{route('save.calificacion.sitio')}}" method="POST" class="form form-vertical" role="form" id="almacenarTransferencia" >
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <br>   
      <div class="panel-body">
        <div class="row"> 
	        <div class="form-group col-md-12">
	            <div class="input-group">
	              <div class="input-group-addon"><b>Calificación</b></div>            
	              <select name="calificacion" class="form-control" required>
	              	<option value="">Seleccione ...</option>
	              	<option value="1">Malo</option>
	              	<option value="2">Regular</option>
	              	<option value="3">Bueno</option>
	              	<option value="4">Excelente</option>
	              </select>               
	            </div>
	        </div> 

          	<div class="form-group col-md-12">
	          <label for="observacion" class="col-md-4 control-label text-left">Observaciones</label>   
	          <textarea name="observacion" id="observacion" class="form-control" rows="3" required></textarea>                      
      		</div>     
        
          
        </div>       
        <div class="row" style="margin-left: 5%;">
            <a href="javascript:window.history.back();" style="border: 1px solid black;" type="button" id="cancelar" class="btn btn-default m-t-10">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
      </div>   
    </form>
  
  </div><!-- /.tab-content -->
</div><!-- /.collapse in -->

@endsection

@section('js')


@endsection