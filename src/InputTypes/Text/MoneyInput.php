<?php

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
            ->formatStateUsing(fn($state) => $state ? number_format($state / 100, 2, '.', '') : "0.00")
            ->dehydrateStateUsing(fn($state) => $state ? $state * 100 : 0);
    }
}