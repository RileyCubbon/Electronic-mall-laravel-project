<?php

namespace App\Models;

class Authority extends Model
{
    protected $fillable = ['name','parent_id','user','is_delete'];
}
