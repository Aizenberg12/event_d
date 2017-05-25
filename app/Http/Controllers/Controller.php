<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Event;

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
        return view('add_event');
    }
}