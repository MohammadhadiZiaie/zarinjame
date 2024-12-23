<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;

class ContractController extends Controller
{
    public function index()
    {
        // بدون رابطه contracts از status برای تشخیص استفاده می‌کنیم
        $orders = Order::with('customer')->orderBy('id','desc')->get();
        return view('contracts.index', compact('orders'));
    }

    public function create($order_id)
    {
        $order = Order::with('customer')->findOrFail($order_id);
        $contract = Contract::where('order_id', $order_id)->first();
        if($contract && $contract->status == 'generated') {
            return redirect()->route('contracts.index')->with('error', 'برای این سفارش قبلاً قرارداد ایجاد شده است.');
        }

        return view('contracts.create', compact('order'));
    }

    public function store(Request $request, $order_id)
    {
        $order = Order::with('customer')->findOrFail($order_id);
    
        $contract = Contract::updateOrCreate(
            ['order_id' => $order_id],
            [
                'status' => 'generated',
                'contract_date' => Carbon::now(),
                'contract_details' => $this->generateContractText($order)
            ]
        );
    
        // تغییر وضعیت سفارش به completed
        $order->update(['status' => 'completed']);
    
        return redirect()->route('contracts.index')->with('success', 'قرارداد با موفقیت ایجاد شد! اکنون می‌توانید PDF را دانلود کنید.');
    }
    

    public function download($id)
    {
        $contract = Contract::with('order.customer')->findOrFail($id);
        $pdf = PDF::setOptions(['isRemoteEnabled' => true])->loadView('contracts.pdf', compact('contract'));
        $filename = 'contract_'.$contract->order->order_number.'.pdf';
        return $pdf->download($filename);
    }

    private function generateContractText($order)
    {
        $customerName = $order->customer ? $order->customer->name : '---';
        $customerId = $order->customer ? $order->customer->id : '---';
        $customerAddress = $order->customer ? ($order->customer->address ?? '---') : '---';
        $productName = $order->product_name ?? '---';
        $quantity = $order->quantity ?? '---';
        $today = Carbon::now()->format('Y-m-d');
        $orderNumber = $order->order_number;

        $templatePath = resource_path('contracts/template.txt');
        if(!file_exists($templatePath)) {
            return "قالب قرارداد یافت نشد.";
        }

        $contract_template = file_get_contents($templatePath);

        $contract_text = str_replace([
            '[[TODAY]]',
            '[[ORDER_NUMBER]]',
            '[[CUSTOMER_NAME]]',
            '[[CUSTOMER_ID]]',
            '[[CUSTOMER_ADDRESS]]',
            '[[PRODUCT_NAME]]',
            '[[QUANTITY]]'
        ], [
            $today,
            $orderNumber,
            $customerName,
            $customerId,
            $customerAddress,
            $productName,
            $quantity
        ], $contract_template);

        return $contract_text;
    }
}
