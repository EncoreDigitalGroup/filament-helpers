<?php

namespace EncoreDigitalGroup\Filament\Helpers\Forms;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;

/** @experimental */
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

    public static function make(array $schema, int $outerColumns = 2, int $innerColumns = 2, int $outerColumnSpan = 2, int $innerColumnSpan = 2, bool $fluent = false): self|Component
    {
        $groupSection = new self($schema);

        if ($innerColumns > $outerColumns) {
            $groupSection->innerColumns($outerColumns);
        }

        if ($outerColumnSpan > $outerColumns) {
            $groupSection->outerColumnSpan($outerColumns);
        }

        if ($innerColumnSpan > $innerColumns) {
            $groupSection->innerColumnSpan($innerColumns);
        }

        if ($fluent) {
            return $groupSection;
        }

        return $groupSection->render();
    }

    private function __construct(array $schema)
    {
        $this->schema($schema);
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

    public function getOuterColumns(): int
    {
        return $this->outerColumns;
    }

    public function outerColumns(int $outerColumns): self
    {
        $this->outerColumns = $outerColumns;
        return $this;
    }

    public function getInnerColumns(): int
    {
        return $this->innerColumns;
    }

    public function innerColumns(int $innerColumns): self
    {
        $this->innerColumns = $innerColumns;
        return $this;
    }

    public function getOuterColumnSpan(): int
    {
        return $this->outerColumnSpan;
    }

    public function outerColumnSpan(int $outerColumnSpan): self
    {
        $this->outerColumnSpan = $outerColumnSpan;
        return $this;
    }

    public function getInnerColumnSpan(): int
    {
        return $this->innerColumnSpan;
    }

    public function innerColumnSpan(int $innerColumnSpan): self
    {
        $this->innerColumnSpan = $innerColumnSpan;
        return $this;
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