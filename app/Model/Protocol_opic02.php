<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Protocol_opic02 extends Model
{
    protected $table="protocol_opic02";

    public function ststusName(){
        return $this->hasOne('App\Model\Statususer' , 'id', 'opic02_status');
        
    }

    public function Protocol_opic2StatusName(){
        return $this->hasOne('App\Model\Protocol_opic2Status' , 'code', 'opic02_responsible');
        
    }
    
}
