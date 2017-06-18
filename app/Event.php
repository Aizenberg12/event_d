<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'event_name',
        'event_link',
        'event_address',
        'event_date',
        'time_start',
        'time_end',
        'cost',
        'event_description',
        'date_end_registration',
        'type_registration',
        'time_end_registration',
        'speker_description',
        'program_description',
        'organ_name',
        'event_type_id',
        'event_image',
        'user_id',
    ];
}
