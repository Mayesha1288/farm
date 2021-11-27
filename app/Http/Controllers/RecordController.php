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
        'hens_died'=>$request->hens_died,
        'sick_hens'=>$request->sick_hens,
        'vaccinated_hens'=>$request->vaccinated_hens,
        'eggs_collected'=>$request->eggs_collected,
        'eggs_damaged'=>$request->eggs_damaged,

    ]);
    return redirect()->back()->with('msg','Records created successfully.');;
   }
}
