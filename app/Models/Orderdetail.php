<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;
    protected $table = 'orderdetail';
    
    public function salesorder(): BelongsTo
    {
        return $this->belongsTo(Salesorder::class,'orderId');
    }
}
