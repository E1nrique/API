<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_empleado';
    protected $table = "empleados";
    protected $fillable = [
        "id_empleado",
        "nombre",
        "apellidos",
        "edad",
        "sexo",
        "salario",
        "id_area",
        "foto"
    ];
}
