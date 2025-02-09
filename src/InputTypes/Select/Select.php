<?php

/*
 * Copyright (c) 2023-2024. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\InputTypes\Select;

use Closure;
use EncoreDigitalGroup\Filament\Helpers\Support\InputMasking;
use Filament\Forms\Components\Select as BaseSelect;
use Illuminate\Contracts\Support\Htmlable;

class Select
{
    public static function make(string $fieldName, string|Htmlable|Closure|null $label): BaseSelect
    {
        return BaseSelect::make($fieldName)
            ->label($label)
            ->native(false)
            ->extraAttributes(["class" => InputMasking::get()], true);
    }
}
