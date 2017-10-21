<?php

namespace App\Models;

class Role extends Model
{
    protected $fillable = ['grade','number','is_delete','is_verify'];

    const UN_DELETE = 0;
    const IS_DELETE = 1;

    const UN_VERIFY = 0;
    const IS_VERIFY = 1;

    public function managers (  )
    {
        return $this->belongsTo(Manager::class);
    }

    public function authorities (  )
    {
        return $this->belongsToMany(Authority::class,'jurisdictions');
    }
}
