<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
    protected $table="animal_type"; 
    protected $primarykey = "id";
    public $timestamps = false;

    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'sommon_status');
        
    }
}
