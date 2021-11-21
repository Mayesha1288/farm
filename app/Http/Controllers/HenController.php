<?php

namespace App\Http\Controllers;


use App\Models\Hen;
use Illuminate\Http\Request;

class HenController extends Controller
{
   public function henlist()
   {
       $henlist=Hen::all();
       return view('admin.pages.hen-list',compact('henlist'));
   }
   public function createhenlist()
   {
    
    return view('admin.pages.create-henlist');
   }

   public function store(Request $request)
   {
    //    dd($request->all());

    Hen::create([
        'type'=>$request->type,
        'weight'=>$request->weight,
        'price'=>$request->price,
        'quantity'=>$request->quantity,

    ]);
    return redirect()->back();
   }
}
