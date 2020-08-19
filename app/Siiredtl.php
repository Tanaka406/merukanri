<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siiredtl extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'siire_value' => 'required',
        'siire_place' => 'required',
        'siire_date' => 'required',
        'zaiko_id' => 'required',
    );
}
