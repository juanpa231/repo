<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesorder extends Model
{
    use HasFactory;
    protected $table = 'salesorder';
    protected $primaryKey = 'orderId';
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class,'custId');
    }
}
