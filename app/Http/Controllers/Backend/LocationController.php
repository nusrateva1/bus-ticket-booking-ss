<?php

namespace App\Http\Controllers\Backend;
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function list()
    {
        {
            $Locations=location::all();
            return view('backend.layout.location.list',compact('Locations'));
        }
      
    }
    public function store(Request $request)
    {

      $locations= Location::create([
            
            
            
            'name'=>$request->name,
        ]);

        return redirect()->back();
    }
}
