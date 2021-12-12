<?php

namespace App\Http\Controllers;


use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function hentype()
    {
        $types=Type::all();
        return view ('admin.pages.hentype',compact('types'));
    }
    public function createhentype()
    {
        return view('admin.pages.create-hentype');
    }
    public function store(Request $request){
         //dd($request->all());

        

        Type::create([
            'hentype'=>$request->hentype,
            
            

        ]);
        return redirect()->back()->with('msg','HenTypes added successfully.');;
    }
}
