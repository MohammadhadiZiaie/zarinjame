<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
        return view('index');
    }

    public function showDashboard()
    {
        // دریافت کاربر وارد شده
        $user = auth()->user(); 
    
        // نقش و زیرنقش کاربر را دریافت می‌کنیم
        $role = $user->role; 
        $sub_role = $user->sub_role; 
    
        // بررسی دسترسی براساس نقش و زیرنقش
        if ($role === 'operator' && $sub_role === 'production') {
            // دسترسی به منوی تولید
            return view('production.dashboard');
        } elseif ($role === 'operator' && $sub_role === 'sewing') {
            // دسترسی به منوی دوخت
            return view('sewing.dashboard');
        }
    
        // اگر دسترسی نداشت، خطای 403 را باز می‌گردانیم
        abort(403, 'Unauthorized access');
    }}
