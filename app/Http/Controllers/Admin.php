<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Event;

class Admin extends Controller
{
    public function dashboard() {
    	$users = User::all();
    	$events = Event::all();
    	return view('admin.dashboard')->with(['users'=>$users, 'events'=>$events]);
    }

    public function user_delete($id) {
    	User::where('id', $id)->delete();

    	return back();
    }
}
