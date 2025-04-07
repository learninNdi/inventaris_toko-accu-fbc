<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Purchase extends Model
{
    protected $guarded = [];

    public function purchaseDetails(): HasMany {
        return $this->hasMany(PurchaseDetail::class);
    }
}
