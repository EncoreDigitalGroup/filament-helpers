<?php

namespace EncoreDigitalGroup\Filament\Helpers\Forms;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;

/** @experimental */
class GroupSection
{
    public static function make(array $schema, int $outerColumns = 2, int $innerColumns = 1, int $outerColumnSpan = 2, int $innerColumnSpan = 1): Component
    {
        if ($innerColumns > $outerColumns) {
            $innerColumns = $outerColumns;
        }

        if ($outerColumnSpan > $outerColumns) {
            $outerColumnSpan = $outerColumns;
        }

        if ($innerColumnSpan > $innerColumns) {
            $innerColumnSpan = $innerColumns;
        }

        return Group::make()
            ->schema([
                Section::make()
                    ->schema($schema)
                    ->columns($innerColumns)
                    ->columnSpan($innerColumnSpan),
            ])
            ->columns($outerColumns)
            ->columnSpan($outerColumnSpan);
    }
}