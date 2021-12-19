<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hen;
use App\Models\Type;


class StockController extends Controller
{
    public function stocklist()
    {
        $hens = Type::all();
        // dd($hens);
        return view('admin.pages.stock-list',compact('hens'));
    }
    public function createstocklist(){
        return view('admin.pages.create-stocklist');
    }

    public function stockDetails($id){
        $category= Type::find($id);
        // dd($category);
        $hens = Hen::where('type',$category->hentype)->get();
        // dd($hens);
        return view('admin.pages.stock-details',compact('hens'));
    }
}
