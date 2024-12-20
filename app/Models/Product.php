<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function productimages()
    {
        return $this->hasMany(ProductImage::class);
    }
    protected $guarded = ['id'];
}
