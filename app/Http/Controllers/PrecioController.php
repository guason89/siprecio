<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrecioController extends Controller
{
   
    public function index()
    {
        //
    }

    public function PresupuestoInicio(){
        return view('presupuesto.tipo');
    }

    public function PresupuestoEtapaDos(Request $request){
        //return $request->all();        
        $data['presupuestoini'] = $request->presupuestoini;
        if($request->tipoapp=='app')
        {
           return view('presupuesto.app',$data); 
        }
        elseif($request->tipoapp=='web') 
        {
            return view('presupuesto.web',$data);  
        }
        
    }
    
}
