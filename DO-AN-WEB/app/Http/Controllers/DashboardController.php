<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Customer;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    //show dashboard
    public function ShowDashboard()
    {
        return view('dashboard.dashboard');
    }
    //Total 
    public function getTotalCustomers() {
    
         // Sử dụng Eloquent để đếm tổng số khách hàng
         $totalCustomers = Customer::count();

         // Trả về kết quả cho view
         return view('dashboard.dashboard',compact('totalCustomers'));
    }
}
