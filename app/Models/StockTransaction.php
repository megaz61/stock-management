<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class StockTransaction extends Model
{
    protected $fillable = ['product_id', 'type', 'quantity', 'notes'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
