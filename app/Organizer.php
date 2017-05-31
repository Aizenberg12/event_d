<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    protected $fillable = [
        'organ_name',
        'organ_link',
        'organ_description',
        'soorgan_name',
        'soorgan_link',
        'soorgan_description',
        'sponsor_name',
        'sponsor_link',
        'sponsor_description',
        'sponsor_status',
        'partner_name',
        'partner_link',
        'partner_description',
        'partner_status',
    ];
}
