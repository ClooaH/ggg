<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'answer'];

    public function game() {
        return $this->belongsToMany(Game::class);
    }

    public function errorCodes() {
        return $this->belongsToMany(ErrorCode::class);
    }

    public function leads() {
        return $this->belongsToMany(Lead::class);
    }
}
