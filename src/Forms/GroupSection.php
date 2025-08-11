<?php

/*
 * Copyright (c) 2025. Encore Digital Group.
 * All Rights Reserved.
 */

namespace EncoreDigitalGroup\Filament\Helpers\Forms;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;

class GroupSection
{
    private array $schema = [];
    private int $outerColumns = 2;
    private int $innerColumns = 2;
    private int $outerColumnSpan = 2;
    private int $innerColumnSpan = 2;
    private bool $collapsable = false;
    private bool $defaultCollapsed = false;
    private string $sectionHeading = "";

    private function __construct(array $schema)
    {
        $this->schema($schema);
    }

    public static function fluent(array $schema): self
    {
        return new self($schema);
    }

    public static function make(array $schema): Component
    {
        return self::fluent($schema)->render();
    }

    public function schema(array $schema): self
    {
        $this->schema = $schema;

        return $this;
    }

    public function getSchema(): array
    {
        return $this->schema;
    }

    public function outerColumns(int $count): self
    {
        $this->outerColumns = $count;

        return $this;
    }

    public function getOuterColumns(): int
    {
        return $this->outerColumns;
    }

    public function innerColumns(int $count): self
    {
        $this->innerColumns = $count;

        return $this;
    }

    public function getInnerColumns(): int
    {
        return $this->innerColumns;
    }

    public function outerColumnSpan(int $count): self
    {
        $this->outerColumnSpan = $count;

        return $this;
    }

    public function getOuterColumnSpan(): int
    {
        return $this->outerColumnSpan;
    }

    public function innerColumnSpan(int $count): self
    {
        $this->innerColumnSpan = $count;

        return $this;
    }

    public function getInnerColumnSpan(): int
    {
        return $this->innerColumnSpan;
    }

    public function collapsible(bool $collapsible = true): self
    {
        $this->collapsable = $collapsible;

        return $this;
    }

    public function getCollapsible(): bool
    {
        return $this->collapsable;
    }

    public function sectionHeading(string $heading = ""): self
    {
        $this->sectionHeading = $heading;

        return $this;
    }

    public function getSectionHeading(): string
    {
        return $this->sectionHeading;
    }

    public function defaultCollapsed(bool $collapsed = true): self
    {
        $this->defaultCollapsed = $collapsed;

        return $this;
    }

    public function getDefaultCollapsed(): bool
    {
        return $this->defaultCollapsed;
    }

    public function render(): Component
    {
        return Group::make()
            ->schema([
                Section::make()
                    ->schema($this->getSchema())
                    ->columns($this->getInnerColumns())
                    ->columnSpan($this->getInnerColumnSpan())
                    ->collapsible($this->getCollapsible())
                    ->collapsed($this->getDefaultCollapsed())
                    ->heading($this->getSectionHeading()),
            ])
            ->columns($this->getOuterColumns())
            ->columnSpan($this->getOuterColumnSpan());
    }
}