<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Protocol_secretary_opic extends Model
{
    protected $table="protocol_secretary_opic";

    public function usersName(){
        return $this->hasOne('App\Model\UserAll' , 'id', 'reviewer_id');
        
    }
}
