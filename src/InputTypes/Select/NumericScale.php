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

class NumericScale
{
    public static function make(BackedEnum|string $field, ?string $label = null): Select
    {
        if ($field instanceof BackedEnum) {
            $field = Enum::string($field);
        }

        return Select::make($field)
            ->options([
                "1" => "1",
                "2" => "2",
                "3" => "3",
                "4" => "4",
                "5" => "5",
            ])
            ->label($label)
            ->native(false)
            ->extraAttributes(["class" => InputMasking::get()], true);
    }
}
