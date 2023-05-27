<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tipoDocumentoId' => 'required',
            'identificacionEmpleado' => 'required|unique:users,identificacionEmpleado',
            'nombresEmpleado' => 'required',
            'apellidosEmpleado' => 'required',
            'telefonoEmpleado' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:10',
            'password_confirmation' => 'required|same:password',
        ];
    }
}
