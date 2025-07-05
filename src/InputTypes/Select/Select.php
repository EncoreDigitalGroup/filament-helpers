<?php

/*
 * Copyright (c) 2023-2025. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\InputTypes\Select;

use BackedEnum;
use Closure;
use EncoreDigitalGroup\Filament\Helpers\Support\InputMasking;
use EncoreDigitalGroup\StdLib\Objects\Enum;
use Filament\Forms\Components\Select as BaseSelect;
use Illuminate\Contracts\Support\Htmlable;

class Select
{
    public static function make(BackedEnum|string $fieldName, string|Htmlable|Closure|null $label): BaseSelect
    {
        if ($fieldName instanceof BackedEnum) {
            $fieldName = Enum::string($fieldName);
        }

        return BaseSelect::make($fieldName)
            ->label($label)
            ->native(false)
            ->extraAttributes(["class" => InputMasking::get()], true);
    }
}
