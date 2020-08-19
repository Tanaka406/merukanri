<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uriagedtl extends Model
{
     protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'uriage_value' => 'required',
        'baikyaku_date' => 'required',
        'zaiko_id' => 'required',
    
    );
}
