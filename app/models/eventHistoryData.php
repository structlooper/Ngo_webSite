<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class eventHistoryData extends Model
{
    protected $table = 'event_history_data';
    protected $fillable = ['event_name','event_details','place','duration_start','duration_end'];
}
