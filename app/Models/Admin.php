<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'user_id' // relacionamento de usuarios da tabela de usuarios com a de admin
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
