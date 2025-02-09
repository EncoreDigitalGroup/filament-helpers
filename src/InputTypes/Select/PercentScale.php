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
class PercentScale
{
    public static function make(string $field, ?string $label = null): \Filament\Forms\Components\Select
    {
        return Select::make($field)
            ->options([
                '0.00' => 'No Change',
                '0.05' => '5%',
                '0.10' => '10%',
                '0.15' => '15%',
                '0.20' => '20%',
                '0.25' => '25%',
                '0.30' => '30%',
                '0.35' => '35%',
                '0.40' => '40%',
                '0.45' => '45%',
                '0.50' => '50%',
                '0.55' => '55%',
                '0.60' => '60%',
                '0.65' => '65%',
                '0.70' => '70%',
                '0.75' => '75%',
                '0.80' => '80%',
                '0.85' => '85%',
                '0.90' => '90%',
                '0.95' => '95%',
                '1.00' => '100%',
            ])
            ->label($label)
            ->native(false)
            ->extraAttributes(['class' => InputMasking::get()], true);
    }
}
