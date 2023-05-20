<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tipo_documento;

class EmpleadosController extends Controller
{
    //crear Empleado
    public function crearE(){
        $documentos = tipo_documento::all();
        return view('front.register', compact('documentos'));
    }

    public function storeE(Request $request){
        User::create($request->all());
        return redirect()->route('login');
    }
}
