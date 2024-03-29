<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'product_id',
        'image',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
