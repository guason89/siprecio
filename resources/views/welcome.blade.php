@extends('admin.template.nav') 
@section('page_heading','Bienvenido')
@section('title','Home')
@section('css')
<style type="text/css">
	
	.button {
    position: relative;
    display: inline-block;
    max-width: 100%;
    margin: .5em 0;
    padding: 1em 3em;
    border: 0;
    border-radius: 5px;
    background-image: -webkit-linear-gradient(right,#14e6d3,#8660f5);
    background-image: linear-gradient(to left,#14e6d3,#8660f5);
    box-shadow: 0 1px 5px 0 rgba(0,0,0,.2);
    color: #fff;
    line-height: 1.42857143;
    text-align: center;
    text-decoration: none;
    white-space: nowrap;
    font-family: sans-serif;
    font-size: 20px;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    overflow: hidden;
}
home.css:9
.text-uppercase {
    text-transform: uppercase;
}
home.css:1
button, html input[type=button], input[type=reset], input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer;
}
home.css:1
button, select {
    text-transform: none;
}
home.css:1
button {
    overflow: visible;
}
home.css:1
button, input, optgroup, select, textarea {
    color: inherit;
    font: inherit;
    margin: 0;
}
a{
    text-decoration: none;
}

</style>
@endsection

@section('section')
@if(Auth::user())
<h2 class="bg-warning text-center">A continuación se le presentaran una serie de sencillas preguntas, para determinar el costo de su aplicación.</h2>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4"><a href="{{route('presupuesto.tipo')}}" class="button text-uppercase js--start fonts-loaded">Empezar</a></div>
	<div class="col-md-4"></div>	
</div>
@endif

@endsection