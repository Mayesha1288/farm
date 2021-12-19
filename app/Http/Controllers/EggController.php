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

        $filename = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }

        Egg::create([
            'type'=>$request->egg_type,
            'price'=>$request->egg_price,
            'quantity'=>$request->egg_quantity,
            'image'=>$filename

        ]);
        return redirect()->back()->with('msg','Eggs added successfully.');;
    }

    public function eggDetails($egg_id)
    {
 
 //        collection= get(), all()====== read with loop (foreach)
 //       object= first(), find(), findOrFail(),======direct
      $egg=Egg::find($egg_id);
 //      $product=Product::where('id',$product_id)->first();
        return view('admin.pages.eggdetails',compact('egg'));
    }
 
    public function eggDelete($egg_id)
    {
       Egg::find($egg_id)->delete();
       return redirect()->back()->with('success','Egg Deleted.');
    }
}
