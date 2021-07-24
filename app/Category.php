<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['creaated_at','deleted_at','updated_at']; 
}
