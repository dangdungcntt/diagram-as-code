<?php


namespace Nddcoder\Dac\Base\Traits;


trait HasFactory
{
    public static function create(...$params)
    {
        return new static(...$params);
    }
}