<?php

/*
 * Copyright (c) 2024-2025. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\InputTypes\Text;

use BackedEnum;
use EncoreDigitalGroup\Filament\Helpers\Support\InputMasking;
use EncoreDigitalGroup\StdLib\Objects\Enum;
use Filament\Forms\Components\TextInput as TextInputBase;

class TextInput
{
    public static function make(BackedEnum|string $field, string $label): TextInputBase
    {
        if ($field instanceof BackedEnum) {
            $field = Enum::string($field);
        }

        return TextInputBase::make($field)
            ->label($label)
            ->validationAttribute($label)
            ->columnSpanFull()
            ->extraAttributes(["class" => InputMasking::get()], true);
    }
}
