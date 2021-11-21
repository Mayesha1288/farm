<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stocklist()
    {
        return view('admin.pages.stock-list');
    }
    public function createstocklist(){
        return view('admin.pages.create-stocklist');
    }
}
