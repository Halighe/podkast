<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Document\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Document\DocumentResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\File;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use App\Models\Document;
use App\MoonShine\Resources\ActivityBlock\ActivityBlockResource;
use Throwable;


/**
 * @extends FormPage<DocumentResource>
 */
class DocumentFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                ID::make(),

                BelongsTo::make('Активность', 'activityBlock', resource: ActivityBlockResource::class)
                ->required()
                ->searchable(),

                Text::make('Название для отображения', 'original_name')
                    ->required()
                    ->placeholder('Например: Учебный план на 2026 год'),

                File::make('Файл', 'file_path')
                    ->disk('public')
                    ->dir('documents')
                    ->allowedExtensions(['pdf', 'docx', 'pptx']),

                Number::make('Порядок сортировки', 'sort_order')
                    ->default(0),
            ]),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    protected function formButtons(): ListOf
    {
        return parent::formButtons();
    }

   protected function rules(DataWrapperContract $item): array
    {
        $rules = [
            'activity_block_id' => ['required', 'exists:activity_blocks,id'],
            'original_name' => ['required', 'string', 'max:255'],
            'sort_order' => ['integer'],
        ];
        
        if (!$item->getKey()) {
            $rules['file_path'] = ['required', 'file', 'mimes:pdf,docx,pptx', 'max:20480']; 
        } else {
            $rules['file_path'] = ['nullable', 'file', 'mimes:pdf,docx,pptx', 'max:20480'];
        }
        
        return $rules;
    }

    /**
     * @param  FormBuilder  $component
     *
     * @return FormBuilder
     */
    protected function modifyFormComponent(FormBuilderContract $component): FormBuilderContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<ComponentContract>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }
}
