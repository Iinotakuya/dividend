<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Dividend extends Model
{
    protected $guarded = array('id');
    
    
    use Sortable; 
    public $sortable = ['company', 'Industry', 'detail'];

    public static $rules = array(
        'company' => 'required',
        'Industry' => 'required',
        'detail' => 'required',
    );
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
