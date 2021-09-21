<?php

namespace App\Http\Controllers\Backend;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        $Categories=category::paginate(3);
        return view('backend.layout.Category.list',compact('Categories'));
    }
    public function store(Request $request)
    {

       category::create([
            
            
            'name'=>$request->name,
            'details'=>$request->details,
        ]);

        return redirect()->back();

   
}
}