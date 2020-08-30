<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dividend extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'company' => 'required',
        'Industry' => 'required',
        'detail' => 'required',
    );
}
