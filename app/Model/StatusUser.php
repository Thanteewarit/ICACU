<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StatusUser extends Model
{
    protected $table="statusUser";
    public $timestamps = false;

    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'status');
        
    }
}
