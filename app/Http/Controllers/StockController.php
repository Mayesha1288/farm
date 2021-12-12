<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hen;

class StockController extends Controller
{
    public function stocklist()
    {
        $hens = Hen::all();
        // dd($hens);
        return view('admin.pages.stock-list',compact('hens'));
    }
    public function createstocklist(){
        return view('admin.pages.create-stocklist');
    }
}
