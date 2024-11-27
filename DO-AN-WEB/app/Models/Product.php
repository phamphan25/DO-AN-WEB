<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product'; // Đảm bảo tên bảng chính xác
    public function comments()
    {
        return $this->hasMany(Comment::class, 'customer_id');
    }
    protected $fillable = [
        'product_id',
        'brand_id',
        'product_name',
        'product_price',
        'desc',
        'product_sold',
        'product_image',
        
    ];
    // If you want to set custom timestamps
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
}
