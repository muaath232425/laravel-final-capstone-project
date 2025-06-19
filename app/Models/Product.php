<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD

    protected $fillable = [
        'sku',
        'product_name',
        'product_image',
        'category_id',
        'brand_id',
        'cost_price',
        'selling_price',
    ];

=======
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'brand_id',
        'category_id',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
}
