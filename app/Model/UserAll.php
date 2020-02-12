<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class UserAll extends Model
{
    protected $table="users";

    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'status');
        
    }

    public function UsersDetailName(){
        return $this->hasOne('App\Model\UsersDetail' , 'usersId', 'id');
        
    }
}
