<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table="animal_model";
    protected $primarykey = "id";
    public $timestamps = false;

    public function arimaltype(){
        return $this->hasOne('App\Model\AnimalType' , 'id', 'animal_type');
        
    }
    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'animal_status');
        
    }
}
