<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonatePageData extends Model
{
    protected $table = 'donate_page_data_save';
    protected $fillable = ['heading','content','image'];
}
