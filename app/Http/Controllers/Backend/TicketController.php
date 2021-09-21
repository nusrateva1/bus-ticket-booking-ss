<?php

namespace App\Http\Controllers\Backend;
use App\Models\Ticket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function list()
    {
        $Ticket=Ticket::paginate(3);
       return view('backend.layout.Ticket.list',compact('Ticket'));
    }
    public function store(Request $request)
    {

        Ticket::create([
            
            
            'time'=>$request->time,
            'date'=>$request->date,
            'destination'=>$request->destination,
          'description'=>$request->description
        ]);

        return redirect()->back();
    }

   
}

