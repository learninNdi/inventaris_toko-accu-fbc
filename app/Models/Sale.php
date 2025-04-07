<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sale extends Model
{
    protected $guarded = [];

    public function saleDetails(): HasMany {
        return $this->hasMany(SaleDetail::class);
    }
}
