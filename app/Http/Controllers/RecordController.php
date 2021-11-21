<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function recordlist()
    {
        return view('admin.pages.record-list');
    }
    public function createrecordlist(){
        return view('admin.pages.create-recordlist');
    }
}
