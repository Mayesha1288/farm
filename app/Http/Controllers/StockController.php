<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hen;
use App\Models\Egg;
use App\Models\Type;
use App\Models\Eggtype;


class StockController extends Controller
{
    public function stocklist()
    {
        $hens = Type::all();
        $eggs = Eggtype::all();
    //    dd($hens);
        return view('admin.pages.stock-list',compact('hens','eggs'));
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
    public function eggstockDetails($id){
        $category= Eggtype::find($id);
        // dd($category);
        $eggs = Egg::where('type',$category->id)->get();
        // dd($eggs);
        return view('admin.pages.egg-stock-details',compact('eggs'));
    }

}
