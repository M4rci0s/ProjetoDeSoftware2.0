<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use App\Models\Tecnico;

use Illuminate\Http\Request;

class TecnicoController extends Controller
{

    public function index()
    {
        // Recupera todos os técnicos
        $tecnicos = Tecnico::all();

        // Passa os técnicos para a view
        return view('tecnicos', ['valores' => $tecnicos]);
    }

    public function detalhes($id)
    {
        $tecnico = Cadastro::find($id);
        return view('contrato', compact('tecnico'));
    }
} 
