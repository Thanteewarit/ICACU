<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Animals_type extends Model
{
    protected $table="animals_type";

    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'Status');
        
    }
}
