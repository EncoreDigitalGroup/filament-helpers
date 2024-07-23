<?php

/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\InputTypes\DateTime;

use Closure;
use Filament\Forms;

class DateTimePicker
{
    public static function make(string $field, bool|Closure $required = true): Forms\Components\DateTimePicker
    {
        return Forms\Components\DateTimePicker::make($field)
            ->required($required)
            ->columnSpan(2)
            ->seconds(false)
            ->weekStartsOnSunday()
            ->displayFormat('m/d/Y h:i A')
            ->minDate(now()->startOfDay());
    }
}
