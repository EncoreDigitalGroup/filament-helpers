<?php

/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace EncoreDigitalGroup\FilamentHelpers\InputTypes\DateTime;

use Closure;
use Filament\Forms;

class DateTimePicker
{
    public static function make(string $field, bool|Closure $required = true): Forms\Components\DateTimePicker
    {
        return Forms\Components\DateTimePicker::make($field)
            ->required($required)
            ->columnSpan(2)
            ->native(false)
            ->seconds(false)
            ->weekStartsOnSunday()
            ->displayFormat('m/d/Y h:i A')
            ->minDate('1970-01-01');
    }
}
