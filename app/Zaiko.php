<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zaiko extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'syohin_name' => 'required',
        'user_id' => 'required',
    );
}
