<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function list()
    {
       return view('backend.layout.booking.list');
    }



}
