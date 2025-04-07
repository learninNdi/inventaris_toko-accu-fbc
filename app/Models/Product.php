<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function brand(): BelongsTo {
        return $this->belongsTo(Brand::class);
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function type(): BelongsTo {
        return $this->belongsTo(Type::class);
    }

    public function vehicle(): BelongsTo {
        return $this->belongsTo(Vehicle::class);
    }

    public function purchaseDetail(): BelongsTo {
        return $this->belongsTo(PurchaseDetail::class);
    }

    public function saleDetail(): BelongsTo {
        return $this->belongsTo(SaleDetail::class);
    }
}
