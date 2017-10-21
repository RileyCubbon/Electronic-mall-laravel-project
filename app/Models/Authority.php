<?php

namespace App\Models;

class Authority extends Model
{
    protected $fillable = ['name','parent_id','user','is_delete'];

    const UN_DELETE = 0;
    const IS_DELETE = 1;
    const TOP_LEVEL_AUTHORITY = 0;

    public function roles (  )
    {
        return $this->belongsToMany(Role::class,'jurisdictions');
    }

    public function parent (  )
    {
        return $this->belongsTo(Authority::class,'parent_id','id');
    }

    public function children (  )
    {
        return $this->hasMany(Authority::class,'parent_id','id');
    }
}
