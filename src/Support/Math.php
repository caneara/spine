<?php

namespace Caneara\Spine\Support;

class Math
{
    /**
     * Round the given value up to its nearest fraction point.
     *
     */
    public static function roundUp(int | float $value) : float | false
    {
        return ceil($value);
    }
}
