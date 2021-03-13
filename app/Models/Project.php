<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function money() {
        return $this->hasOne(Money::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getPercentAttribute() {
        $current = $this->money->current;
        $target = $this->money->target;
        $percent = floor($current/$target*100);
        return $percent;
    }

    public function getRemainingAttribute() {
        $endDate = $this->created_at->addDays($this->duration);
        return $endDate->diffInDays(now());
        // return $endDate;
    }
}
