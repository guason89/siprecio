@extends('admin.template.nav') 
@section('page_heading','web')
@section('title','presupuesto')
@section('css')
<style type="text/css">
.ljg{
    width: 200px;
    height: 200px;
}

.imweb{
    height: 200px;
    widows: 200px:;
}
</style>
@endsection

@section('section')
<div class="panel panel-success" id="prg1">
    <div class="panel-heading">
        <h3 class="panel-title text-center">¿En qué lenguaje se desarrollara la aplicación?</h3>    
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
           <div class="col-md-3">
               <a class="btn" onclick="calcularPresupuesto(200,1);"><img class="img-thumbnail ljg" src="{{asset('img/java.png')}}"></a>
           </div> 
           <div class="col-md-3">
               <a class="btn" onclick="calcularPresupuesto(100,1);"><img class="img-thumbnail ljg" src="{{asset('img/php.png')}}"></a>
           </div>
           <div class="col-md-3">
               <a class="btn" onclick="calcularPresupuesto(300,1);"><img class="img-thumbnail ljg" src="{{asset('img/ruby.png')}}"></a>
           </div>
           <div class="col-md-3">
               <a class="btn" onclick="calcularPresupuesto(100,1);"><img class="img-thumbnail ljg" src="{{asset('img/cchar.png')}}"></a>
           </div>
           <div class="col-md-3">
               <a class="btn" onclick="calcularPresupuesto(250,1);"><img class="img-thumbnail ljg" src="{{asset('img/phyton.png')}}"></a>
           </div>
        </div>
    </div>
</div>
<div class="panel panel-success" id="prg2" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Se utilizaran frameworks en el desarrollo?</h3>    
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
                <a class="btn" onclick="calcularPresupuesto(200,2);"><img class="img-thumbnail imweb" src="{{asset('img/si.png')}}"></a>           
            </div>
            <div class="col-md-4">
                <a  class="btn" onclick="calcularPresupuesto(100,2);"><img class="img-thumbnail imweb" src="{{asset('img/no.png')}}"></a>
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
        <h3 class="panel-title text-center">¿La aplicación será escalable?</h3>    
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
                <a class="btn" onclick="calcularPresupuesto(200,4);"><img class="img-thumbnail imweb" src="{{asset('img/si.png')}}"></a>           
            </div>
            <div class="col-md-4">
                <a  class="btn" onclick="calcularPresupuesto(0,4);"><img class="img-thumbnail imweb" src="{{asset('img/no.png')}}"></a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<div class="panel panel-success" id="prg5" style="display: none;">
    <div class="panel-heading">
        <h3 class="panel-title text-center">se utilizarán patrones de diseño para desarrolar la aplicación?</h3>    
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
                <a class="btn" onclick="calcularPresupuesto(200,5);"><img class="img-thumbnail imweb" src="{{asset('img/si.png')}}"></a>           
            </div>
            <div class="col-md-4">
                <a  class="btn" onclick="calcularPresupuesto(110,5);"><img class="img-thumbnail imweb" src="{{asset('img/no.png')}}"></a>
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

    if(pregunta!=5)
    {
        var siguiente = pregunta+1;
        $("#prg"+pregunta).hide();
        $("#prg"+siguiente).show();
    }
    else
    {
        alertify.alert("PRESUPUESTO CALCULADO","<strong><H1 class='text-justify'>El presupuesto de su aplicación es : <br>$"+presupuesto+"</H1></strong>",function(){               
                window.location.href = "{{route('admin.index')}}";
        });
    }   
    
    
}

</script>
@endsection