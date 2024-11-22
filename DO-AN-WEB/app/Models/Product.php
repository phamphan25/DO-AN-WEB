<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;  // Đảm bảo sử dụng đúng namespace cho HasFactory

    protected $table = 'product';  // Đảm bảo tên bảng đúng (nên là 'products' thay vì 'product')
    protected $fillable = ['brand_id', 'product_name', 'product_price', 'desc', 'product_sold', 'product_image', 'product_status'];
}