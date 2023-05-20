<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadosController extends Controller
{
    //Crear empleado
    public function store(Request $Request){
        try{
            $empleado = Empleado::create($Request->all());
            return response()->json($empleado,201);
        }catch (\Throwable $th){
            return response()->json([
                'errors' => $th
            ], 400);
        }
    }
}
