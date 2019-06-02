<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Support\Str;

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

    public function setSlugAttribute($value)
    {
        // create an accessor
        return Str::slug($value);
    }

    public function getDesription($data)
    {
        $data = [];
        return $data;
    }
}
