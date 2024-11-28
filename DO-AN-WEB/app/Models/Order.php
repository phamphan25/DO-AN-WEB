<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order'; 
    protected $primaryKey = 'order_id';
    protected $fillable = ['order_id','customer_id', 'shipping_id', 'status', 'order_code'];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function orderItems()
    {
        return $this->hasMany(Order::class);
    }
    public $order; // thuộc tính
    
    // //Quan hệ với bảng khách hàng (customer)
    // public function customer()
    // {
    //     return $this->hasMany(Customer::class, 'customer_id');  // customer_id là khóa ngoại trong bảng order
    // }

    // //Quan hệ với bảng sản phẩm (shipping)
    // public function shipping()
    // {
    //     return $this->hasMany(shipping::class ,'shipping_id'); // Đảm bảo chỉ rõ shipping_id nếu cần
    // }
}
