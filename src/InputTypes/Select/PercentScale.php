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

class PercentScale
{
    public static function make(BackedEnum|string $field, ?string $label = null): Select
    {
        if ($field instanceof BackedEnum) {
            $field = Enum::string($field);
        }

        return Select::make($field)
            ->options([
                "0.00" => "No Change",
                "0.05" => "5%",
                "0.10" => "10%",
                "0.15" => "15%",
                "0.20" => "20%",
                "0.25" => "25%",
                "0.30" => "30%",
                "0.35" => "35%",
                "0.40" => "40%",
                "0.45" => "45%",
                "0.50" => "50%",
                "0.55" => "55%",
                "0.60" => "60%",
                "0.65" => "65%",
                "0.70" => "70%",
                "0.75" => "75%",
                "0.80" => "80%",
                "0.85" => "85%",
                "0.90" => "90%",
                "0.95" => "95%",
                "1.00" => "100%",
            ])
            ->label($label)
            ->native(false)
            ->extraAttributes(["class" => InputMasking::get()], true);
    }
}
