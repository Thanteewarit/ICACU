<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table="status"; 
    protected $primarykey = "id";
    public $timestamps = false;
}
