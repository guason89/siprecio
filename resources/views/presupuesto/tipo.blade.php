@extends('admin.template.nav') 

@section('css')
<style type="text/css">
.page-header{
    text-align: center;
}
.img-thumbnail{
    height: 200px;
    width: 200px;
}

</style>
@endsection

@section('section')
<div id="tipo">
    <h2 class="bg-info text-center">¿Qué tipo de aplicación desea desarrollar?</h2>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <a onclick="preguntas('app')" data-toggle="tooltip" title="movil"><img class="img-circle" src="{{asset('img/tipoapp.png')}}"></a>        
        </div>
        <div class="col-md-4">
            <a onclick="preguntas('web')" data-toggle="tooltip" title="web"><img class="img-circle" src="{{asset('img/tipoweb.png')}}"></a>
        </div>   
        <div class="col-md-2"></div>
    </div>
</div>
<div class="panel panel-success" id="prg1" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">¿la aplicación usará panel de administración?</h3>    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label>interfaz gráfica para la gestión de usuarios y la administración de los servicios</label>     
            </div>
            <div class="col-md-2"></div>       
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <a class="btn" onclick="calcularPresupuesto(150,1);"><img class="img-thumbnail" src="{{asset('img/si.png')}}"></a>           
            </div>
            <div class="col-md-4">
                <a  class="btn" onclick="calcularPresupuesto(0,1);"><img class="img-thumbnail" src="{{asset('img/no.png')}}"></a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<div class="panel panel-success" id="prg2" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">¿la aplicación tendrá diferentes tipo de usuarios?</h3>    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label>Roles con diferentes permisos de acceso</label>     
            </div>
            <div class="col-md-2"></div>       
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <a class="btn" onclick="calcularPresupuesto(150,2);"><img class="img-thumbnail" src="{{asset('img/si.png')}}"></a>           
            </div>
            <div class="col-md-4">
                <a  class="btn" onclick="calcularPresupuesto(0,2);"><img class="img-thumbnail" src="{{asset('img/no.png')}}"></a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<div class="panel panel-success" id="prg3" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">¿Qué tipo de seguridad incorpora su aplicación?</h3>    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <img class="img-responsive" width="100%" src="{{asset('img/seguridad.png')}}">    
            </div>            
            <div class="col-md-2"></div>       
        </div>
        <br>
      
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <div class="bg-danger form-control">
                    <input type="radio" name="seguridad" onclick="calcularPresupuesto(0,3);">Ninguna<br>              
               </div>
               <div class="bg-warning form-control">
                    <input type="radio" name="seguridad" onclick="calcularPresupuesto(150,3);">Baja<br> 
               </div>
               <div class="bg-success form-control">
                   <input type="radio" name="seguridad" onclick="calcularPresupuesto(150,3);">Media<br> 
               </div>
               <div class="bg-success form-control">
                   <input type="radio" name="seguridad" onclick="calcularPresupuesto(300,3);">Seguridad Ante todo tipo de ataques<br>
               </div>             
            </div>
        </div>
    </div>
</div>
<div class="panel panel-success" id="prg4" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Ingrese el número aproximado de tablas que tendrá la base de datos</h3>    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
               <img class="img-responsive" width="100%" src="{{asset('img/base.png')}}">    
            </div>            
            <div class="col-md-4 input-group" style="margin-top: 150px;">
               <input type="text" id="tablas" class="form-control">              
               <div onclick='calcularPresupuesto(45*$("#tablas").val(),4);' class="input-group-addon"> Siguiente</div>             
            </div>
            <div class="col-md-2"></div>       
        </div>
        <div class="row">
           
        </div>
    </div>
</div>
<div class="panel panel-success" id="prg5" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">¿La aplicación se conecta con otros aplicativos remotos?</h3>    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label>Servicios Web, bases de datos externa, etc</label>     
            </div>
            <div class="col-md-2"></div>       
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <a class="btn" onclick="calcularPresupuesto(250,5);"><img class="img-thumbnail" src="{{asset('img/si.png')}}"></a>           
            </div>
            <div class="col-md-4">
                <a  class="btn" onclick="calcularPresupuesto(0,5);"><img class="img-thumbnail" src="{{asset('img/no.png')}}"></a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<div class="panel panel-success" id="prg6" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">La aplicación tendrá servicios web?</h3>    
    </div>
    <div class="panel-body">        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <a class="btn" onclick='$("#servicios").show();'><img class="img-thumbnail" src="{{asset('img/si.png')}}"></a>           
            </div>
            <div class="col-md-4">
                <a  class="btn" onclick="calcularPresupuesto(0,6);"><img class="img-thumbnail" src="{{asset('img/no.png')}}"></a>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row" style="display: none;" id="servicios">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label>Ingrese el numero de servicios web que tendrá</label>                
                <div class="col-md-4 input-group">
                   <input type="text" id="serviciosweb" class="form-control">              
                   <div onclick='calcularPresupuesto(50*$("#serviciosweb").val(),6);' class="input-group-addon"> Siguiente</div>             
                </div>             
            </div>     
        </div>       
    </div>
</div>
<div class="panel panel-success" id="prg7" style="display: none;">
    <form action="{{route('presupuesto.etapa.dos')}}" method="POST" class="form form-vertical" role="form" id="presupuestouno" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="presupuestoini" id="presupuestoini" value="">
        <input type="hidden" name="tipoapp" id="tipoapp" value="">
        <div class="panel-heading">
            <h3 class="panel-title text-center">En la escala del uno al 4 ¿qué tan rentable considera que es esta aplicación?</h3>    
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                   <label>Siendo uno poco rentable y 4 Muy rentable</label>  
                </div>            
                <div class="col-md-2"></div>       
            </div>
            <br>

            <div class="row">
                <div class="col-md-2"></div>
                <a style="margin: 5px;" class="col-md-2 btn btn-danger" onclick="siguienteEtapa(100);">Uno</a>
                <a style="margin: 5px;" class="col-md-2 btn btn-warning" onclick="siguienteEtapa(200);">Dos</a>
                <a style="margin: 5px;" class="col-md-2 btn btn-primary" onclick="siguienteEtapa(400);">Tres</a>
                <a style="margin: 5px;" class="col-md-2 btn btn-success" onclick="siguienteEtapa(800);">Cuatro</a>          
            </div>
        </div>
        <button type="submit" style="display: none;" id="seguirProcesoDos">SiguienteEtapa</button>
    </form>
</div>
@endsection
@section('js')
<script>
var presupuesto = 0;
var tipo= '';

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    var check = document.getElementsByName("seguridad");
    var i;
    for (i = 0; i < check.length; i++) {
         check[i].checked = false;
    }
    $("#tablas").val('');
    $("#serviciosweb").val('');
    var califica = document.getElementsByName("rentable");
    var j;  
    for (j = 0; j < califica.length; j++) {
         califica[j].checked = false;
    }
});

function calcularPresupuesto(suma,pregunta){
    var siguiente = pregunta+1;
    $("#prg"+pregunta).hide();
    $("#prg"+siguiente).show();
    presupuesto += suma;
    console.log(presupuesto);
}

function preguntas(item){
    tipo = item;
    $("#tipo").hide();
    $("#prg1").show();

}

function siguienteEtapa(suma){
    presupuesto += suma;
    console.log(presupuesto);
    $("#tipoapp").val(tipo);
    $("#presupuestoini").val(presupuesto);
    $("#seguirProcesoDos").trigger('click');
}
</script>
@endsection