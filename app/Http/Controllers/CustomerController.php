<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()
    {
        $customer=Customer::all();
        // this will show us the view in this page
        return view('admin.pages.customer',compact('customer'));
    }
    public function createcustomer(){
        return view('admin.pages.create-customer');
    }

    public function store(Request $request)
   {
    //    dd($request->all());
    //   the name which is written in the databaase table then the name written in the form
    Customer::create([
        'customer_name'=>$request->name,
        'address'=>$request->address,
        'phone_number'=>$request->number,
        'customer_description'=>$request->description,
        

    ]);
    return redirect()->back();
}
}
