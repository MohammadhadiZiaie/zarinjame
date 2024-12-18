<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Morilog\Jalali\Jalalian; // اطمینان حاصل کنید که پکیج نصب شده و کلاس را use کرده‌اید

class OrderController extends Controller
{
    /**
     * تبدیل اعداد فارسی به انگلیسی
     */
    private function persianToEnglishNumbers($string) {
        $persianDigits = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
        $englishDigits = ['0','1','2','3','4','5','6','7','8','9'];
        return str_replace($persianDigits, $englishDigits, $string);
    }

    public function createStep1()
    {
        $customers = Customer::all();
        return view('orders.create_step1', compact('customers'));
    }

    public function postStep1(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'customer_id' => 'required|exists:customers,id',
            'order_date' => 'required|string', // تاریخ شمسی با اعداد فارسی
        ]);

        // تبدیل اعداد فارسی به انگلیسی
        $englishDate = $this->persianToEnglishNumbers($request->order_date);

        // تبدیل تاریخ شمسی به میلادی
        $gregorianDate = Jalalian::fromFormat('Y/m/d', $englishDate)->toCarbon()->toDateTimeString();

        $previous_order_id = $request->previous_order_id ?: null;

        $order_data = [
            'product_name' => $request->product_name,
            'customer_id' => $request->customer_id,
            'order_date' => $gregorianDate,
            'previous_order_id' => $previous_order_id
        ];

        Session::put('order_data', $order_data);

        return redirect()->route('orders.create.step2');
    }

    public function createStep2()
    {
        return view('orders.create_step2');
    }

    public function postStep2(Request $request)
    {
        // اعتبارسنجی و دریافت داده‌های مرحله 2
        $request->validate([
            'size_scheme' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'main_fabric' => 'required|array',
            'main_fabric.*.type' => 'required|string|max:255',
            'main_fabric.*.code' => 'required|string|max:255',
            'main_fabric.*.color' => 'required|string|max:255',
            'additional_fabric' => 'required|array',
            'additional_fabric.*.type' => 'required|string|max:255',
            'additional_fabric.*.code' => 'required|string|max:255',
            'additional_fabric.*.color' => 'required|string|max:255',
        ]);

        $order_data = Session::get('order_data', []);
        $order_data['size_scheme'] = $request->size_scheme;
        $order_data['quantity'] = $request->quantity;
        $order_data['main_fabric'] = $request->main_fabric;
        $order_data['additional_fabric'] = $request->additional_fabric;
        Session::put('order_data', $order_data);

        return redirect()->route('orders.create.step3');
    }

    public function createStep3()
    {
        return view('orders.create_step3');
    }

    public function postStep3(Request $request)
    {
        $request->validate([
            'services' => 'array',
        ]);

        $order_data = Session::get('order_data', []);
        $order_data['services'] = $request->services;
        Session::put('order_data', $order_data);

        return redirect()->route('orders.create.step4');
    }

    public function createStep4()
    {
        return view('orders.create_step4');
    }

    public function postStep4(Request $request)
    {
        $request->validate([
            'indirect_materials' => 'required|array',
            'indirect_materials.*.type' => 'required|string|max:255',
            'indirect_materials.*.size' => 'required|string|max:255',
            'indirect_materials.*.quantity' => 'required|integer|min:1',
            'indirect_materials.*.row' => 'required|string|max:255',
            'indirect_materials.*.description' => 'required|string|max:255',
        ]);

        $order_data = Session::get('order_data', []);
        $order_data['indirect_materials'] = $request->indirect_materials;
        Session::put('order_data', $order_data);

        // حالا همه اطلاعات را در دیتابیس ثبت می‌کنیم
        $final_data = Session::get('order_data');
        $final_data['order_number'] = 'ORD-' . time();
        $final_data['status'] = 'pending';
        $final_data['type'] = 'normal'; // فرضی
        $final_data['delivery_date'] = Carbon::now()->addDays(7); // فرضا یک هفته بعد

        $order = Order::create($final_data);

        // پاک کردن سشن
        Session::forget('order_data');

        return redirect()->route('orders.index')->with('success', 'سفارش با موفقیت ثبت شد.');
    }

    public function index()
    {
        $orders = Order::with('customer')->orderBy('id','desc')->get();
        return view('orders.index', compact('orders'));
    }


    public function show($id)
    {
        $order = Order::with(['customer', 'previousOrder', 'assignedUser', 'process'])->findOrFail($id);
    
        // $order_data حاوی همه اطلاعات است
        return view('orders.show', compact('order'));
    }




}
