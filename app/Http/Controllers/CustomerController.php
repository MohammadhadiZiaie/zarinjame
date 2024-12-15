<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;


class CustomerController extends Controller
{
   
    public function create() {

        return view('addcustomer');
    }
    public function add(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'nullable|email|unique:customers,email',
        'phone' => 'required|unique:customers,phone|numeric',
        'codemeli' => 'required|numeric|digits:10|unique:customers,codemeli',
        'address' => 'nullable|string|max:255',
    ]);

    $customer = new Customer();
    $customer->name = $request->name;
    $customer->email = $request->email;
    $customer->phone = $request->phone;
    $customer->codemeli = $request->codemeli;
    $customer->address = $request->address;
    $customer->save();

    return redirect()->route('customers.create')->with('success', 'مشتری جدید با موفقیت افزوده شد.');
}
public function list()
{
    $customers = Customer::all();
    return view('listcustomer', compact('customers'));
}

}
