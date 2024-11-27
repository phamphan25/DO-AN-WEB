<?php

namespace App\Http\Controllers;

use App\Models\Product; // Đảm bảo bạn khai báo đúng model
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Hiển thị danh sách sản phẩm
    public function index()
    {
        $products = Product::all(); // Lấy tất cả sản phẩm
        return view('product.index', compact('products')); // Trả về view và truyền biến products
    }

    // Xóa sản phẩm theo ID
    public function destroy($id)
    {
        // Xóa các comment liên quan trước
        \DB::table('comment')->where('product_id', $id)->delete();
    
        // Sau đó xóa sản phẩm
        $product = Product::findOrFail($id);
        $product->delete();
    
        return redirect()->route('product.index')->with('success', 'Sản phẩm và các comment liên quan đã được xóa.');
    }
    
    
}