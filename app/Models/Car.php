<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    protected $fillable = [
        'name',
        'engine_id'
    ];

    public function engine(): BelongsTo
    {
        return $this->belongsTo(Engine::class);
    }
}