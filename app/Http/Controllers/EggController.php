<?php

namespace App\Http\Controllers;


use App\Models\Egg;
use Illuminate\Http\Request;

class EggController extends Controller
{
    public function egglist()
    {
        $eggs=Egg::all();
        return view ('admin.pages.egg-list',compact('eggs'));
    }
    public function createegglist()
    {
        return view('admin.pages.create-egglist');
    }
    public function store(Request $request){
        // dd($request->all());
        Egg::create([
            'type'=>$request->egg_type,
            'price'=>$request->egg_price,
            'quantity'=>$request->egg_quantity,

        ]);
        return redirect()->back();
    }
}
