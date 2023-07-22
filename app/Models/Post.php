<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    //one user, many post
    //should be public function
    //protected functions don't work properly
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
