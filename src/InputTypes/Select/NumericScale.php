<?php

/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\InputTypes\Select;

use EncoreDigitalGroup\Filament\Helpers\Support\InputMasking;
use Filament\Forms\Components\Select;

/**
 * @api
 */
class NumericScale
{
    public static function make(string $field, ?string $label = null): Select
    {
        return Select::make($field)
            ->options([
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
            ])
            ->label($label)
            ->native(false)
            ->extraAttributes(["class" => InputMasking::get()], true);
    }
}
