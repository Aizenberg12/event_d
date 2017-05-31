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
use Intervention\Image\ImageManager;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, MakesHttpRequests;

    public function home()
    {
        $events = Event::select('event_name', 'organizer_id', 'event_date', 'event_type_id')->orderBy('id', 'desc')->get();
        dump($events);
        foreach ($events as $event){

            $event_type_id = EventType::select('type')->where('id'  );
        }

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
                'organ_name' => 'required|max:255',
                'organ_link' => 'max:255',
                'organ_description' => 'required',
                'soorgan_name' => 'required|max:255',
                'soorgan_link' => 'max:255',
                'soorgan_description' => 'required',
                'sponsor_name' => 'required|max:255',
                'sponsor_link' => 'max:255',
                'sponsor_description' => 'required',
                'sponsor_status' => 'max:255',
                'partner_name' => 'required|max:255',
                'partner_link' => 'max:255',
                'partner_description' => 'required',
                'partner_status' => 'max:255',
            ]);

        $organizer = new Organizer();
        $event = new Event();
        dump($request);
        $data = $request->all();

        $data_org = [
            'organ_name' =>$data['organ_name'],
            'organ_link' =>$data['organ_link'],
            'organ_description' =>$data['organ_description'],
            'soorgan_name' =>$data['soorgan_name'],
            'soorgan_link' =>$data['soorgan_link'],
            'soorgan_description' =>$data['soorgan_description'],
            'sponsor_name' =>$data['sponsor_name'],
            'sponsor_link' =>$data['sponsor_link'],
            'sponsor_description' =>$data['sponsor_description'],
            'sponsor_status' =>$data['sponsor_status'],
            'partner_name' =>$data['partner_name'],
            'partner_link' =>$data['partner_link'],
            'partner_description' =>$data['partner_description'],
            'partner_status' =>$data['partner_status'],
        ];
        $organizer->fill($data_org);
        $id_org = Organizer::select('id')->orderBy('id', 'desc')->limit(1)->get();
        foreach ($id_org as $id){

        }

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
            'organizer_id' =>$id['id'],
            'event_type_id' =>$data['event_type'],
        ];
        $file = $request->file;

        $name = time(); // prepend the time (integer) to the original file name

        $file->move('uploads', $name); // move it to the 'uploads' directory (public/uploads)

        // create instance of Intervention Image
        $img = Image::make('public/foo.jpg');

        // resize image to fixed size
        // See the docs - http://image.intervention.io/api/resize
        $img->resize(300, 200);



    

        $event->fill($data_main);

        $organizer->save();
        $event->save();
        
        return redirect('/');
    }

}