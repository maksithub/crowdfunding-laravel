<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    public function rewards() {
        return $this->hasMany(Reward::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
