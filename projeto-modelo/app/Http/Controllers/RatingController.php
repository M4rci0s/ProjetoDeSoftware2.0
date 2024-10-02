<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecnico;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    /**
     * Armazena uma nova avaliação para um técnico.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validação dos dados recebidos
        $request->validate([
            'tecnico_id' => 'required|exists:tecnicos,id',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Encontra o técnico pelo ID
        $tecnico = Tecnico::findOrFail($request->tecnico_id);

        // Atualiza a média de avaliações
        $tecnico->atualizarMediaRating($request->rating);

        // Retorna de volta com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Avaliação enviada com sucesso!');
    }
}
