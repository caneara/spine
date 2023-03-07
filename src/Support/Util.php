<?php

namespace Caneara\Spine\Support;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class Util
{
    /**
     * Attempt to execute the given database task.
     *
     */
    public static function attempt(Closure $action) : mixed
    {
        $delay    = App::isProduction() ? 250 : 0;
        $retries  = App::isProduction() ? 40 : 0;
        $attempts = App::isProduction() ? 10 : 1;

        return static::retry($retries, fn() => DB::transaction($action, $attempts), $delay);
    }

    /**
     * Determine if the given value is blank.
     *
     */
    public static function blank(mixed $value) : bool
    {
        return blank($value);
    }

    /**
     * Determine if the given value is not blank.
     *
     */
    public static function filled(mixed $value) : bool
    {
        return ! static::blank($value);
    }

    /**
     * Catch a potential exception and return a default value.
     *
     */
    public static function rescue(callable $callback, mixed $default = null, bool $report = false) : mixed
    {
        return rescue($callback, $default, $report);
    }

    /**
     * Retry an operation a given number of times.
     *
     */
    public static function retry(int $times, callable $callback, int $delay = 0, callable $when = null) : mixed
    {
        return retry($times, $callback, $delay, $when);
    }

    /**
     * Call the given Closure with the given value then return the value.
     *
     */
    public static function tap(mixed $value, callable $callback = null) : mixed
    {
        return tap($value, $callback);
    }

    /**
     * Execute the given callback if the given value is falsy.
     *
     */
    public static function unless(mixed $value = null, Closure $callback) : mixed
    {
        return $value ? $value : $callback($value);
    }

    /**
     * Execute the given callback if the given value is truthy.
     *
     */
    public static function when(mixed $value = null, Closure $callback) : mixed
    {
        return $value ? $callback($value) : $value;
    }
}
