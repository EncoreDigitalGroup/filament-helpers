<?php

/*
 * Copyright (c) 2025. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\Forms;

use Filament\Resources\Pages\Page;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;

class FormLoader
{
    public static function make(Page $context, Model $model, ?string $method, ?string $statePath = "data"): array
    {
        return [
            "form" => $context::getResource()::form($context::getResource()::$method(
                Schema::make($context)
                    ->operation("edit")
                    ->model($model)
                    ->statePath($statePath)
                    ->columns($context->hasInlineLabels() ? 1 : 2)
                    ->inlineLabel($context->hasInlineLabels()),
            )),
        ];
    }
}