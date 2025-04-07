<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleDetail extends Model
{
    protected $guarded = [];

    public function products(): HasMany {
        return $this->hasMany(Product::class);
    }

    public function purchase(): BelongsTo {
        return $this->belongsTo(Purchase::class);
    }
}
