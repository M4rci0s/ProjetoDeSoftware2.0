<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');


        // Se não houver uma consulta, retorne todos os técnicos
        if ($query) {
            $valores = Cadastro::where('nome', 'LIKE', "%{$query}%")->get();
        } else {
            $valores = Cadastro::all();
        }

        return view('tecnicos', compact('valores'));
    }

    /*public function searchTecnicoAlf(Request $request){
        $query = $request->input('query');
    $sort = $request->input('sort');

    // Inicializa a query base
    $tecnicos = Cadastro::query();

    // Aplica a busca, se houver
    if ($query) {
        $tecnicos->where('nome', 'like', '%' . $query . '%');
    }

    // Aplica a ordenação, se houver
    if ($sort) {
        if ($sort == 'alphabetical') {
            $tecnicos->orderBy('nome', 'asc');
        } elseif ($sort == 'rating') {
            $tecnicos->orderBy('pontuacao', 'desc');
        } elseif ($sort == 'region') {
            $tecnicos->orderBy('regiao', 'asc');
        }
    }
}

    // Pega os resultados paginados
    $tecnicos = $tecnicos->paginate(10);*/

    // Retorna a view com os resultados
    // return view('tecnicos')->with('tecnicos');
    // return view('index')->with('valores', $cadastros);



}
