<?php

/*
 * Copyright (c) 2024-2025. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\InputTypes\Text;

use EncoreDigitalGroup\Filament\Helpers\Support\InputMasking;
use Filament\Forms\Components\TextInput as TextInputBase;

class TextInput
{
    public static function make(string $field, string $label): TextInputBase
    {
        return TextInputBase::make($field)
            ->label($label)
            ->validationAttribute($label)
            ->columnSpanFull()
            ->extraAttributes(["class" => InputMasking::get()], true);
    }
}
