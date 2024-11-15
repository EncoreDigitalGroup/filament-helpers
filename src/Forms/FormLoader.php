<?php

namespace EncoreDigitalGroup\Filament\Helpers\Forms;


use Filament\Forms\Form;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Model;

class FormLoader
{
    protected Page $context;
    protected Model $model;
    protected string $method;
    protected string $statePath = 'data';

    public static function make(Page $context, Model $model, ?string $method, ?string $statePath = 'data'): array
    {
        return [
            'form' => $context->form($context::getResource()::$method(
                Form::make($context)
                    ->operation('edit')
                    ->model($model)
                    ->statePath($statePath)
                    ->columns($context->hasInlineLabels() ? 1 : 2)
                    ->inlineLabel($context->hasInlineLabels()),
            )),
        ];
    }
}