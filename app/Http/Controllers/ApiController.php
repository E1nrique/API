<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Areas;
use App\Models\Empleados;
use App\Http\Controllers\Controller;



class Apicontroller extends Controller
{
    public function cargaareas()
    {
        //crea una consulta del modelo areas con nombre consulta en formato json
        $consulta = Areas::all()->toJson();
        //devuelve la consulta
        return $consulta;
    }
    public function cargaempleados()
    {
        $consulta = \DB::select("SELECT e.id_empleado, e.nombre, e.apellidos, e.edad, e.sexo, e.foto,
            e.salario, e.id_area, a.nombre AS areatrabajo
            FROM empleados AS e
            INNER JOIN areas AS a ON a.id_area=e.id_area
            ORDER BY e.nombre ASC");
        return response()->json($consulta,201); 
    }
    public function buscaempleadoporid_empleado($id_empleado)
    {
        $consulta = \DB::select("SELECT e.id_empleado, e.nombre, e.apellidos, e.edad, e.sexo, e.foto,
            e.salario, e.id_area, a.nombre AS areatrabajo
            FROM empleados AS e
            INNER JOIN areas AS a ON a.id_area = e.id_area
            WHERE e.id_empleado = $id_empleado
            ORDER BY e.nombre ASC");
        return response()->json($consulta,201); 
    }
    public function eliminaempleado($id_empleado)
    {
        $consulta = Empleados::find($id_empleado);
        $consulta->delete();

        return response()->json("Eliminado",201);
    }
    public function altaempleado(Request $request)
    {
        $consulta = Empleados::create($request->all());
        return response()->json($consulta,201);
    }
    public function modificaempleados(Request $request)
    {
        $empleados = Empleados::find($request->id_empleado);
        $empleados->update($request->all());

        return response()->json($empleados,200);
    }
    



}
