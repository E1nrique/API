<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Areas;

class AreaController extends Controller
{
    public function index(){
        $areas = Areas::all();
        return response()->JSON([
            'data' => $areas
        ]);
    }

    public function store(Request $Request){
        $area = Areas::create($Request->all());
        return response()->JSON([
            'data' => $area
        ]);

    }
    public function show($id){
        $area = Areas::find($id);
        return response()->JSON([
            'data' => $area
        ]);
    }
}
