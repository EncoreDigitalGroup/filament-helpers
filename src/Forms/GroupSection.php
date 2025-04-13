<?php

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

    /**
     * @param  array  $schema  Form schema.
     * @param  int  $outerColumns  Deprecated, use GroupSection::fluent() instead.
     * @param  int  $innerColumns  Deprecated, use GroupSection::fluent() instead.
     * @param  int  $outerColumnSpan  Deprecated, use GroupSection::fluent() instead.
     * @param  int  $innerColumnSpan  Deprecated, use GroupSection::fluent() instead.
     * @param  bool  $fluent  Deprecated, use GroupSection::fluent() instead.
     */
    public static function make(array $schema, int $outerColumns = 2, int $innerColumns = 2, int $outerColumnSpan = 2, int $innerColumnSpan = 2, bool $fluent = false): self|Component
    {
        $groupSection = self::fluent($schema);

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

    /** @param bool $render Deprecated. */
    public function schema(array $schema, bool $render = false): self|Component
    {
        $this->schema = $schema;

        if ($render) {
            return $this->render();
        }

        return $this;
    }

    public function getSchema(): array
    {
        return $this->schema;
    }

    /** @param bool $render Deprecated. */
    public function outerColumns(int $outerColumns, bool $render = false): self|Component
    {
        $this->outerColumns = $outerColumns;

        if ($render) {
            return $this->render();
        }

        return $this;
    }

    public function getOuterColumns(): int
    {
        return $this->outerColumns;
    }

    /** @param bool $render Deprecated. */
    public function innerColumns(int $innerColumns, bool $render = false): self|Component
    {
        $this->innerColumns = $innerColumns;

        if ($render) {
            return $this->render();
        }

        return $this;
    }

    public function getInnerColumns(): int
    {
        return $this->innerColumns;
    }

    /** @param bool $render Deprecated. */
    public function outerColumnSpan(int $outerColumnSpan, bool $render = false): self|Component
    {
        $this->outerColumnSpan = $outerColumnSpan;

        if ($render) {
            return $this->render();
        }

        return $this;
    }

    public function getOuterColumnSpan(): int
    {
        return $this->outerColumnSpan;
    }

    /** @param bool $render Deprecated. */
    public function innerColumnSpan(int $innerColumnSpan, bool $render = false): self|Component
    {
        $this->innerColumnSpan = $innerColumnSpan;

        if ($render) {
            return $this->render();
        }

        return $this;
    }

    public function getInnerColumnSpan(): int
    {
        return $this->innerColumnSpan;
    }

    /** @param bool $render Deprecated. */
    public function collapsible(bool $collapsible = true, bool $render = false): self|Component
    {
        $this->collapsable = $collapsible;

        if ($render) {
            return $this->render();
        }

        return $this;
    }

    public function getCollapsible(): bool
    {
        return $this->collapsable;
    }

    /** @param bool $render Deprecated. */
    public function sectionHeading(string $sectionHeading = "", bool $render = false): self|Component
    {
        $this->sectionHeading = $sectionHeading;

        if ($render) {
            return $this->render();
        }

        return $this;
    }

    public function getSectionHeading(): string
    {
        return $this->sectionHeading;
    }

    /** @param bool $render Deprecated. */
    public function defaultCollapsed(bool $collapsed = true, bool $render = false): self|Component
    {
        $this->defaultCollapsed = $collapsed;

        if ($render) {
            return $this->render();
        }

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