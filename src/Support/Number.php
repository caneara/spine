<?php

namespace System\Support;

use Countable;

class Number
{
    /**
     * Retrieve the total number of items in the given value.
     *
     */
    public static function count(array | Countable $value) : int
    {
        return count($value);
    }

    /**
     * Format the given value using grouped thousands.
     *
     */
    public static function format(float $value, int $decimals = 0, string $decimal = '.', string $group = ',') : string
    {
        return number_format($value, $decimals, $decimal, $group);
    }

    /**
     * Retrieve the highest value between the given value and options.
     *
     */
    public static function maximum(mixed $value, int | float | array ...$options) : mixed
    {
        $options = Util::blank($options) ? [0] : $options;

        return max($value, ...$options);
    }

    /**
     * Retrieve the lowest value between the given value and options.
     *
     */
    public static function minimum(mixed $value, int | float | array ...$options) : mixed
    {
        $options = Util::blank($options) ? [0] : $options;

        return min($value, ...$options);
    }

    /**
     * Round the given value to the given precision using the given mode.
     *
     */
    public static function round(int | float $value, int $precision = 0, int $mode = PHP_ROUND_HALF_UP) : float
    {
        return round($value, $precision, $mode);
    }

    /**
     * Round the given value to the given precision using the given mode then cast to an integer.
     *
     */
    public static function roundToInteger(int | float $value, int $precision = 0, int $mode = PHP_ROUND_HALF_UP) : int
    {
        return (int) static::round($value, $precision, $mode);
    }
}
