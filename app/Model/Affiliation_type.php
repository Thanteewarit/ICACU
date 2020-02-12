<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Affiliation_type extends Model
{
    protected $table="affiliation_type";

    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'status');
        
    }
}
