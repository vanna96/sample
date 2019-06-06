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
        'slug',
        'description'
    ];

    // protected $hidden =[
    //     "category_id",
    //     "created_at",
    //     "updated_at",
    // ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function setNameAttribute($value)
    {
        // create an accessor
        
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    
    public function getShortDescriptionAttribute()
    {
        return "{$this->name} {$this->price}  {$this->description}";
    }
}
