<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table="tb_budget";
    
    public function ststusName(){
        return $this->hasOne('App\Model\Status' , 'status', 'status');
        
    }
}
