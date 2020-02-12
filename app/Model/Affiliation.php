<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    protected $table="affiliation";

    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'status');
        
    }
}
