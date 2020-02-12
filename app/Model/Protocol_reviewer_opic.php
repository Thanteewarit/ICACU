<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Protocol_reviewer_opic extends Model
{
    protected $table="protocol_reviewer_opic";

    public function usersName(){
        return $this->hasOne('App\Model\UserAll' , 'id', 'reviewer_id');
        
    }
}
