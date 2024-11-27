<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    // Phương thức xem tất cả bình luận
    public function index(Request $request)
    {
        // Lấy tất cả bình luận cùng với thông tin khách hàng và sản phẩm
        $orders = order::with(['order'])->get();
        // Trả về view với biến $orders
        return view('order.index', compact('orders'));
    }

    public function edit(Request $request)
    {
        // Lấy tất cả bình luận cùng với thông tin khách hàng và sản phẩm
        // Trả về view với biến $orders
        $order = Order::findOrFail($id); // Lấy đơn hàng theo ID
        return view('update', compact('order'));
        //  $orders = Order::all(); // Hoặc query phù hợp
        // return view('update', compact('orders'));
        // return view('order.update');
    }

    public function destroy($order_id)
    {
        // Kiểm tra đơn hàng có tồn t   ại không
        $order = Order::findOrFail($order_id);
        
        // Xóa đơn hàng
        $order->delete();

        // Quay lại với thông báo thành công
        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được xóa thành công.');
    }

    public function update($order_id) 
    {
        $request->validate([
        "status" => "required|max:255", "description" => "required",
        "order_code" => "required|max:255", "description" => "required",
        ]);
        $order = Order::findOrFail($order_id);
        $order->$request->input('status');
        $order->$request->input('order_code');
        $order->save();
        return redirect()->route('order.index', ['order' => $order->id]);
    }
}





























// class OrderController extends Controller
// {
//     // Phương thức xem tất cả bình luận
//     public function index(Request $request)
//     {
//         // Lấy tất cả bình luận cùng với thông tin khách hàng và sản phẩm
//         $orders = order::with(['order','customer'])->get();
        
//         // Trả về view với biến $orders
//         return view('order.index', compact('orders'));
//     }
   
//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'content' => 'required|string|max:5000', // Validation for order content
//         ]);

//         $order = order::findOrFail($id);
//         $order->content = $request->input('content');
//         $order->save();

//         return redirect()->route('order.index')->with('success', 'order updated successfully.');
//     }
//     public function destroy(order $order)
//     {
//         // Delete the order
//         $order->delete();

//         // Redirect or return a response
//         return redirect()->route('orders.index')->with('success', 'Bình luận đã được xóa thành công.');
//     }
        


// }
