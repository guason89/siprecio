@extends('admin.template.nav') 
@section('page_heading','App')
@section('title','presupuesto')
@section('css')
<style type="text/css">
	
 .tiapp{
    height: 250px;
    width: 250px;
 }

 .imapp{
     height: 200px;
    width: 200px;
 }

 .pnl{
    text-align: center;
    background: #EFFBEF;
 }
</style>
@endsection

@section('section')
 
<div class="panel panel-success" id="prg1">
    <div class="panel-heading">
        <h3 class="panel-title text-center">¿Qué tipo de aplicación será?</h3>    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label></label>     
            </div>
            <div class="col-md-2"></div>       
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <a class="btn" onclick="calcularPresupuesto(150,1);"><img class="img-thumbnail tiapp" src="{{asset('img/android.png')}}"></a>           
            </div>
            <div class="col-md-4">
                <a  class="btn" onclick="calcularPresupuesto(200,1);"><img class="img-thumbnail tiapp" src="{{asset('img/ios.png')}}"></a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

<div class="panel panel-success" id="prg2" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">¿Qué gestor de bases de datos usará?</h3>    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label></label>     
            </div>
            <div class="col-md-2"></div>       
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <a class="btn" onclick="calcularPresupuesto(50,2);"><img class="img-thumbnail tiapp" src="{{asset('img/sqlite.png')}}"></a>           
            </div>
            <div class="col-md-4">
                <a  class="btn" onclick="calcularPresupuesto(100,2);"><img class="img-thumbnail tiapp" src="{{asset('img/mysql.png')}}"></a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<div class="panel panel-success" id="prg3" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Tiempo estimado en el desarrollo de la aplicación</h3>    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label></label>     
            </div>
            <div class="col-md-2"></div>       
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
               <div class="panel panel-danger pnl">                    
                    <div class="panel-body" onclick="calcularPresupuesto(100,3);">
                        UNO A TRES MESES
                    </div>             
               </div>
               <div class="panel panel-danger pnl">                    
                    <div class="panel-body" onclick="calcularPresupuesto(200,3);">
                        TRES MESES A SEIS MESES
                    </div>             
               </div>
               <div class="panel panel-danger pnl">                    
                    <div class="panel-body" onclick="calcularPresupuesto(350,3);">
                        SEIS MESES A UN AÑO
                    </div>             
               </div>
               <div class="panel panel-danger pnl">                    
                    <div class="panel-body" onclick="calcularPresupuesto(500,3);">
                        MAS DE UN AÑO
                    </div>             
               </div>                          
            </div>
        </div>
    </div>
</div>
<div class="panel panel-success" id="prg4" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">¿La aplicación usa APIS para su funcionamiento?</h3>    
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
                <a class="btn" onclick="calcularPresupuesto(200,4);"><img class="img-thumbnail imapp" src="{{asset('img/si.png')}}"></a>           
            </div>
            <div class="col-md-4">
                <a  class="btn" onclick="calcularPresupuesto(0,4);"><img class="img-thumbnail imapp" src="{{asset('img/no.png')}}"></a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
    
var presupuesto = {!!$presupuestoini!!}

$(document).ready(function(){
   
});

function calcularPresupuesto(suma,pregunta){

    presupuesto += suma;
    console.log(presupuesto);

    if(pregunta!=4)
    {
        var siguiente = pregunta+1;
        $("#prg"+pregunta).hide();
        $("#prg"+siguiente).show();
    }
    else
    {
        alertify.alert("PRESUPUESTO CALCULADO","<strong><H1 class='text-justify'>El presupuesto tentativo de su aplicación es : <br>$"+presupuesto+"</H1></strong>",function(){               
                window.location.href = "{{route('admin.index')}}";
        });
    }   
    
    
}

</script>
@endsection