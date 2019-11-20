<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class eventUpcomingData extends Model
{
    protected $table = 'event_upcoming_data';
    protected $fillable = ['event_name','event_details','place','duration_start','duration_end'];
}
