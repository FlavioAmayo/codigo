<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = ['Servicio 1', 'Servicio 2', 'Servicio 3'];
        return view('servicios', compact('servicios'));
    }
}
