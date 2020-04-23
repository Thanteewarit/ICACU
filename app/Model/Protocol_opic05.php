<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Protocol_opic05 extends Model
{
    protected $table="protocol_opic05";

    public function BudgetName(){
        return $this->hasOne('App\Model\Budget' , 'id', 'FundingSource');
        
    }
}
// Test
