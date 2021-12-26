<?php

namespace App\Http\Controllers;



use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function recordlist()
    {
        $recordlist=Record::all();
        return view('admin.pages.record-list',compact('recordlist'));
    }
    public function createrecordlist(){
        return view('admin.pages.create-recordlist');
    }

    public function store(Request $request)
   {
    //    dd($request->all());

    Record::create([
        'date'=>$request->date,
        'hens_died'=>$request->hens_died,
        'sick_hens'=>$request->sick_hens,
        'vaccinated_hens'=>$request->vaccinated_hens,
        'eggs_collected'=>$request->eggs_collected,
        'eggs_damaged'=>$request->eggs_damaged
        

    ]);
    return redirect()->back()->with('msg','Records created successfully.');
   }
   public function recordDetails($record_id)
    {
 
 //        collection= get(), all()====== read with loop (foreach)
 //       object= first(), find(), findOrFail(),======direct
      $record=Record::find($record_id);
 //      $product=Product::where('id',$product_id)->first();
        return view('admin.pages.recorddetails',compact('record'));
    }
 
    public function recordDelete($record_id)
    {
       Record::find($record_id)->delete();
       return redirect()->back()->with('success','Record Deleted.');
    }
}
