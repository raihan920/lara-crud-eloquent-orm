<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Owner extends Model
{
    use HasFactory;
    public function car():BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
    public function mechanic():HasOneThrough
    {
        return $this->hasOneThrough(Mechanic::class, Car::class);
    }
}
