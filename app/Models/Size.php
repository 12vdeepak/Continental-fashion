<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_size', 'size_id', 'product_id');
    }
}
