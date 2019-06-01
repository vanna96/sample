<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    protected $table="products";
    protected $fillable = [
        'name',
        'price',
        'status',
        'profile',
        'category_id',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
