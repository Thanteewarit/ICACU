<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasPermissions extends Model
{
    protected $table="model_has_permissions"; 
    public $timestamps = false;
}
