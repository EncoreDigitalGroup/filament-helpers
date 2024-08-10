<?php

namespace EncoreDigitalGroup\Filament\Helpers\Forms;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;

/** @experimental */
class GroupSection
{
    public static function make(array $schema, int $outerColumns = 1, int $innerColumns = 1): Component
    {
        return Group::make()
            ->schema([
                Section::make()
                    ->schema($schema)
                    ->columns($innerColumns),
            ])
            ->columns($outerColumns);
    }
}