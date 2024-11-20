<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $table='comments';
    protected $fillable =['customer_id','product_id','content','evaluate'];
    //quan he voi bang khach hang
    public function customer(){
    return $this-> belongsTo(Customer::class);
    }
    // // quan he voi bang san pham
    public function product(){
         return $this -> belongsTo(product::class);
    }
    
}