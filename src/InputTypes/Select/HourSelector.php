<?php

/*
 * Copyright (c) 2024-2025. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\InputTypes\Select;

use BackedEnum;
use EncoreDigitalGroup\Filament\Helpers\Support\InputMasking;
use EncoreDigitalGroup\StdLib\Objects\Enum;
use Filament\Forms\Components\Select;

class HourSelector
{
    public static function make(BackedEnum|string $field, ?string $label = null): Select
    {
        if ($field instanceof BackedEnum) {
            $field = Enum::string($field);
        }

        return Select::make($field)
            ->options([
                "12AM" => "Midnight",
                "1AM" => "1AM",
                "2AM" => "2AM",
                "3AM" => "3AM",
                "4AM" => "4AM",
                "5AM" => "5AM",
                "6AM" => "6AM",
                "7AM" => "7AM",
                "8AM" => "8AM",
                "9AM" => "9AM",
                "10AM" => "10AM",
                "11AM" => "11AM",
                "12PM" => "Noon",
                "1PM" => "1PM",
                "2PM" => "2PM",
                "3PM" => "3PM",
                "4PM" => "4PM",
                "5PM" => "5PM",
                "6PM" => "6PM",
                "7PM" => "7PM",
                "8PM" => "8PM",
                "9PM" => "9PM",
                "10PM" => "10PM",
                "11PM" => "11PM",
            ])
            ->label($label)
            ->native(false)
            ->extraAttributes(["class" => InputMasking::get()], true);
    }
}
