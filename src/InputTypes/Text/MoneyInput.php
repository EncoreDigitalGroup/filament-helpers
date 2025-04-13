<?php

/*
 * Copyright (c) 2025. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\InputTypes\Text;

use Filament\Forms\Components\TextInput as TextInputBase;

class MoneyInput
{
    public static function make(string $fieldName, string $label): TextInputBase
    {
        return TextInput::make($fieldName, $label)
            ->numeric()
            ->prefix("$")
            ->step(0.01)
            ->formatStateUsing(fn ($state): string => $state ? number_format($state / 100, 2, ".", "") : "0.00")
            ->dehydrateStateUsing(fn ($state): int|float => $state ? $state * 100 : 0);
    }
}