<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{
    //
    function addData(Request $req){
        $event=new Event;
        $event->name=$req->name;
        $event->email=$req->email;
        $event->address=$req->address;
        $event->save();
        return redirect('add');
    }
}
