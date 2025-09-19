<?php

class Middleware
{
    public const MAP = [
        'guest' => \core\middleware\Guest::class,
        'auth' => \core\middleware\Auth::class,
    ];

    public static function resolve(string $key)
    {
        if (!$key)
        {
            return null;
        }

        if (!isset(self::MAP[$key]))
        {
            throw new Exception("No matching middleware found for key '{$key}'.");
        }

        $class = self::MAP[$key];
        return (new $class())->handle();
    }
}