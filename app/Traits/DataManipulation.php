<?php

/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/10/20
 * Time: 22:49
 */

namespace App\Traits;


use Illuminate\Support\Collection;

/**
 * Trait DataManipulation
 * @package App\Traits
 */
trait DataManipulation
{
    /**
     * 用递归格式化排序传过来的数据
     *
     * @param Collection $collection
     * @param int        $condition
     * @param int        $level
     *
     * @return array
     */
    public function recursionGetFormatData ( Collection $collection, $condition = 0, $level = 0 )
    {
        static $result = [];
        foreach ( $collection as $item ) {
            if ( $item->parent_id == $condition ) {
                $item->level = $level;
                $result[]    = $item;
                $this->recursionGetFormatData($collection, $item->id, $level + 1);
            }
        }
        return $result;
    }
}