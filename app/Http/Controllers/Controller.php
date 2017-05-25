<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Event;
use App\EventType;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $events = Event::all();
        return view('home')->with(['events'=>$events]);
    }

    public function show()
    {
        return view('cabinet');
    }
    
    public function add()
    {
        $event_type = EventType::all();
        return view('add_event')->with(['event_type'=>$event_type]);
    }
}