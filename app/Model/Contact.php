<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table="tb_contact";
    
    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'status');
        
    }
}
