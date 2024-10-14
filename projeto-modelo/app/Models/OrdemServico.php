<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Tecnico;

class OrdemServico extends Model
{
    use HasFactory;

    public function tecnico(): BelongsTo
    {
        return $this->belongsTo(Tecnico::class);
    }
}
