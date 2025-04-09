<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'product_name',
        'quantity',
        'price',
        'file',
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
