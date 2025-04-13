<?php

/*
 * Copyright (c) 2024-2025. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\InputTypes\DateTime;

use Closure;
use EncoreDigitalGroup\Filament\Helpers\Support\InputMasking;
use Filament\Forms\Components\DateTimePicker as BaseDateTimePicker;

class DateTimePicker
{
    public static function make(string $field, bool|Closure $required = true): BaseDateTimePicker
    {
        return BaseDateTimePicker::make($field)
            ->required($required)
            ->columnSpan(2)
            ->seconds(false)
            ->weekStartsOnSunday()
            ->displayFormat("m/d/Y h:i A")
            ->extraAttributes(["class" => InputMasking::get()], true);
    }
}
