<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_documento extends Model
{
    use HasFactory;

    protected $table = 'tipo_documento';
    protected $primaryKey = 'idTipoDocumento';
    protected $fillable = [
        'descripcionDocumento',
        'siglaDocumento'
    ];
}
