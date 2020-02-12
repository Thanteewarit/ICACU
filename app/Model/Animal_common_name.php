<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Animal_common_name extends Model
{
    protected $table="animal_common_name";

    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'status');
        
    }

    public function animalTypeName(){
        return $this->hasOne('App\Model\Animals_type' , 'id', 'id');
        
    }
}
