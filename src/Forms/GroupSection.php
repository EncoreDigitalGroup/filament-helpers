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

    public function outerColumns(int $outerColumns): self
    {
        $this->outerColumns = $outerColumns;

        return $this;
    }

    public function getOuterColumns(): int
    {
        return $this->outerColumns;
    }

    public function innerColumns(int $innerColumns): self
    {
        $this->innerColumns = $innerColumns;

        return $this;
    }

    public function getInnerColumns(): int
    {
        return $this->innerColumns;
    }

    public function outerColumnSpan(int $outerColumnSpan): self
    {
        $this->outerColumnSpan = $outerColumnSpan;

        return $this;
    }

    public function getOuterColumnSpan(): int
    {
        return $this->outerColumnSpan;
    }

    public function innerColumnSpan(int $innerColumnSpan): self
    {
        $this->innerColumnSpan = $innerColumnSpan;

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

    public function sectionHeading(string $sectionHeading = ""): self
    {
        $this->sectionHeading = $sectionHeading;

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