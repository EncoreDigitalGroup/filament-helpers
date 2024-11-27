<?php

namespace EncoreDigitalGroup\Filament\Helpers\Support;

class InputMasking
{
    protected static string $mask = '';

    public static function set(string $mask = ''): void
    {
        static::$mask = $mask;
    }

    public static function get(): string
    {
        return static::$mask;
    }
}