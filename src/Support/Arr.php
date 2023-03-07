<?php

namespace Caneara\Spine\Support;

use Illuminate\Support\Arr as Base;

class Arr extends Base
{
    /**
     * Merge the given arrays together.
     *
     */
    public static function filter(array $value, ?callable $callback = null, int $mode = 0) : array
    {
        return static::values(array_filter($value, $callback, $mode));
    }

    /**
     * Determine if the given key is present in the given value.
     *
     */
    public static function in(array $value, mixed $key) : bool
    {
        return in_array($key, $value);
    }

    /**
     * Apply the given callback to the elements of the given arrays.
     *
     */
    public static function map(array $value, ?callable $callback = null, array ...$arrays) : array
    {
        return array_map($callback, $value, $arrays);
    }

    /**
     * Merge the given arrays together.
     *
     */
    public static function merge(array ...$arrays) : array
    {
        return array_merge(...$arrays);
    }

    /**
     * Determine if the given key is not present in the given value.
     *
     */
    public static function notIn(array $value, mixed $key) : bool
    {
        return ! static::in($value, $key);
    }

    /**
     * Replaces elements from the passed arrays into the first array recursively.
     *
     */
    public static function replaceRecursive(array $value, array ...$replacements) : array
    {
        return array_replace_recursive($value, ...$replacements);
    }

    /**
     * Create an array by splitting the given value.
     *
     */
    public static function split(string $separator, string $value) : array
    {
        return explode($separator, $value);
    }

    /**
     * Retrieve and sort all of the elements in the given value.
     *
     */
    public static function values(array $value) : array
    {
        return array_values($value);
    }
}
