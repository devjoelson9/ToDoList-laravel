<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tarefa extends Model{
    use HasFactory;
    protected $table = 'tarefas';

    protected $fillable = [
        'titulo',
        'descricao',
        'data_vencimento',
        'importante',
        'user_id'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
