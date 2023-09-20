<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'productId';
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'categoryId');
    }
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class,'supplierId');
    }
}
