<?php

namespace App\Http\Controllers;


use App\Models\Hen;
use App\Models\Vaccine;
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
  //left side databse name right side form name in link//

  $filename = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }

  $request->validate([
    'type'=>'required',
    'weight'=>'required|numeric',
    'price'=>'required|numeric',
    'quantity'=>'required|numeric',
    'description'=>'required'
]);





    Hen::create([
        'type'=>$request->type,
        'weight'=>$request->weight,
        'price'=>$request->price,
        'quantity'=>$request->quantity,
        'description'=>$request->description,
        'image'=>$filename
    ]);
    return redirect()->back()->with('msg','Hens added successfully.');
   }


   public function vaccine()
   {
    $vaccines=Vaccine::all();
    //dd($vaccines);
       return view('admin.pages.henvaccine',compact('vaccines') );
       
   }
   public function createvaccine()
   {
    
    return view('admin.pages.create-vaccine');
    
   }

   public function store2(Request $request)
   {
    //    dd($request->all());
       Vaccine::create([
        'vaccine_name'=> $request->vaccine_name,
        'vaccine_production'=> $request->vaccine_production,
        'vaccine_expiration'=> $request->vaccine_expiration,
        'vaccine_description'=> $request->vaccine_description

       ]); 
       return redirect()->back()->with('msg','Vaccine added successfully.');
   }



   public function food()
   {
       return view('admin.pages.henfood');
   }
   
}
