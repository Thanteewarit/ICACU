<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Protocol_docs extends Model
{
    protected $table="protocol_docs";

    public function Protocol_typeName(){
        return $this->hasOne('App\Model\Protocol_type' , 'id', 'protocol_type');
    }
    
    public function Protocol_opic01(){
        return $this->hasOne('App\Model\Protocol_opic01' , 'protocol_id', 'id');
    }

    public function Job_statusName(){
        return $this->hasOne('App\Model\Job_status' , 'id', 'protocol_status'); 
    }

    public function usersName(){
        return $this->hasOne('App\Model\UserAll' , 'id', 'users_id');
    }
    
    
}
