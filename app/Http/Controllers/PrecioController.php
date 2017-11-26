<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

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

    public function Usuarios()
    {
        $usuarios = User::where('type','member')->get();
        $data['usuarios'] = $usuarios;
        return view('admin.users.usuarios',$data);
    }

    public function calificarSitio()
    {
        return view('admin.calificar');
    }

    public function saveCalificarSitio(Request $request)
    {
        $usuario = Auth::user();

        $usuario->calificacion = $request->calificacion;
        $usuario->observacion = $request->observacion;
        $usuario->save();
         return view('welcome');
    }
    
}
