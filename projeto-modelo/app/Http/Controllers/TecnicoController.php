<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;

use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    public function detalhes($id)
    {
        $tecnico = Tecnico::find($id);


        return view('contrato', compact('tecnico'));
    }
}
