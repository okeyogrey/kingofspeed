<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'stock', 'discount', 'category_id', 'brand_id', 'image'];

    // Relationship to category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship to brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Relationship to orders (many-to-many)
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')->withPivot('quantity');
    }

    // Relationship to reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
