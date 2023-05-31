<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tipo_documento;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class EmpleadosController extends Controller
{
    //crear Empleado
    public function crearE(){
        $documentos = tipo_documento::all();
        return view('front.register', compact('documentos'));
    }

    public function storeE(RegisterRequest $request){
        User::create($request->validated());
        return redirect()->route('login')->with('success', 'Cuenta creada correctamente');
    }

    public function loginE(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // Las credenciales son válidas, el usuario está autenticado.
            // Puedes redirigirlo a la página deseada.
            return redirect()->route('lobby');
        }
    
        // Las credenciales no son válidas, el inicio de sesión falló.
        // Puedes redirigirlo de nuevo al formulario de inicio de sesión con un mensaje de error.
        return redirect()->route('login')->withErrors('Las credenciales proporcionadas son incorrectas');
    }
}