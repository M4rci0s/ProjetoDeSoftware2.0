<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;


    protected $table = 'tecnicos';

    /**
     * Campos que podem ser preenchidos em massa.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'email',
        'localizacao',
        'total_rating',
        'rating_count',
        'rating',
    ];

    /**
     * Método para atualizar a média de avaliações.
     *
     * @param int $novaAvaliacao
     * @return void
     */
    public function atualizarMediaRating(int $novaAvaliacao)
    {
        // Incrementa o total das avaliações com a nova avaliação
        $this->total_rating += $novaAvaliacao;

        // Incrementa o contador de avaliações
        $this->rating_count += 1;

        // Calcula a nova média de avaliações
        $this->rating = $this->rating_count > 0 ? $this->total_rating / $this->rating_count : 0;

        // Salva as alterações no banco de dados
        $this->save();
    }
}
