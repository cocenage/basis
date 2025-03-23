<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        
        'is_active',

        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
