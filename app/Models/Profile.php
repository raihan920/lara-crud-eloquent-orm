<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;
    //if you don't want the 'inserted_at' and 'deleted_at' field in profile table
    //then you have to disable the timestamps
    public $timestamps = FALSE;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'age',
        'gender'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
