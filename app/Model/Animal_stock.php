<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Animal_stock extends Model
{
    protected $table="animal_stock";
    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'status');
    }

    public function animalTypeName(){
        return $this->hasOne('App\Model\Animals_type' , 'id', 'animals_type_id');
    }

    public function animalCommonName(){
        return $this->hasOne('App\Model\Animal_common_name' , 'id', 'animal_common_name_id');
    }
}
