<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    public function requirements ( array $where )
    {
        $builder = with($this)->setHidden([])->newQuery();
        foreach ($where as $value)
        {
            if (count($value) === 2)
            {
                list($field, $content) = $value;
                $builder->where($field, '=', $content);
            } elseif (count($value) === 3)
            {
                list($field, $condition, $content) = $value;
                $builder->where($field, $condition, $content);
            }
        }
        return $builder;
    }
}
