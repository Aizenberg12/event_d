<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Event;
use App\EventType;
use App\Organizer;
use App\Http\Requests;
use Illuminate\Http\Request;
use Image;
use Illuminate\Html\HtmlServiceProvider;
use Intervention\Image\ImageManager;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, MakesHttpRequests;

    public function home()
    {
        $events = Event::select(
            'event_name',
            'id',
            'event_link',
            'event_address',
            'organizer_id',
            'event_date',
            'organ_name',
            'event_image',
            'event_type')->orderBy('id', 'desc')->get();

       /* dump($events);*/
        return view('home')->with(['events'=>$events]);

    
    }

    public function oneEvent($id){


        $event = Event::all()->where('id', $id);

        return view('event_content')->with(['event'=>$event]);


    }
    public function homeCheck(){
        $event_types = EventType::all();
        return view('add_event')->with(['event_type'=>$event_types]);
    }
    
    public function show()
    {
        return view('cabinet');
    }
    public function welcome()
    {
        return view('welcome');
    }
    
    public function add()
    {
        $event_type = EventType::all();
        return view('add_event')->with(['event_type'=>$event_type]);
    }

    public function addEvent(Request $request)
    {
        
       $this->validate($request,
            [
                'event_name' => 'required|max:255',
                'event_link' => 'max:255',
                'event_address' => 'required|max:255',
                'event_date' => 'required|max:255',
                'time_start' => 'required|max:255',
                'time_end' => 'required|max:255',
                'cost' => 'required|max:255',
                'event_description' => 'required',
                'date_end_registration' => 'required|max:255',
                'type_registration' => 'required|max:255',
                'time_end_registration' => 'required|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


        $organizer = new Organizer();
        $event = new Event();
        $data = $request->all();

        // $image = $request->file('image'); 
        // $photoName = time() . '.' . $data['event_name'] .'.'.$request->image->guessClientExtension();
        // $request->file('image')->move(public_path('images'), $photoName);

        $image = $request->file('image');
        $photoName = time() . '.' . $data['event_name'] .'.'.$request->image->guessClientExtension();
   
        $path = public_path('/thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path.'/'.$photoName);

        $path = public_path('/images');
        $image->move($path, $photoName);


        $data_main = [
            'event_name'=>$data['event_name'],
            'event_link' =>$data['event_link'],
            'event_address' =>$data['event_address'],
            'event_date' => $data['event_date'],
            'time_start' =>$data['time_start'],
            'time_end' =>$data['time_end'],
            'cost' =>$data['cost'],
            'event_description' =>$data['event_description'],
            'date_end_registration' =>$data['date_end_registration'],
            'type_registration' =>$data['type_registration'],
            'time_end_registration' =>$data['time_end_registration'],
            'speker_description' =>$data['speker_description'],
            'program_description' =>$data['program_description'],
            'organ_name' =>$data['organ_name'],
            'event_type' =>$data['event_type'],
        ];
      

    

        $event->fill($data_main);
        $event->save();

        return redirect('home');
    }

    public function resizeImage()
    {
        return view('resizeImage');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

}