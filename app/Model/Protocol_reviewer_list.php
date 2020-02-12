<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Protocol_reviewer_list extends Model
{
    
    protected $table="protocol_reviewer_list";

    public function reviewerName(){
        return $this->hasOne('App\Model\UserAll' , 'id', 'users_id');
        
    }
}
