<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ActivityBlock\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\ActivityBlock\ActivityBlockResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Select;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Textarea;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\Laravel\Fields\Relationships\HasMany;
use App\MoonShine\Resources\Document\DocumentResource;
use MoonShine\Laravel\Fields\Relationships\BelongsToMany;
use Throwable;
use MoonShine\Laravel\Fields\Relationships\RelationRepeater;
use MoonShine\UI\Fields\File;

/**
 * @extends FormPage<ActivityBlockResource>
 */
class ActivityBlockFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                ID::make(),

                Select::make('Тип направления', 'type')
                    ->options([
                        'study' => 'Учебная деятельность',
                        'extracurricular' => 'Внеурочная деятельность',
                        'additional' => 'Дополнительная деятельность',
                    ])
                    ->required(),

                Text::make('Заголовок', 'title')
                    ->placeholder('Например: Инженерные классы')
                    ->required(),
                    
                Select::make('Иконка', 'icon')
                    ->options([
                        'study' => '🎓',
                        'extracurricular' => '⚙️',
                        'additional' => '🐢',
                    ])
                    ->required()
                    ->default('study'),

                Slug::make('Slug (URL)', 'slug')
                    ->from('title')
                    ->unique()
                    ->required(),

                TinyMce::make('Описание программы', 'description'),
                TinyMce::make('Текст задания', 'assignment_text'),

                Number::make('Порядок сортировки', 'sort_order')
                    ->default(0)
                    ->buttons(),
        
                RelationRepeater::make('Файлы', 'documents')
                ->removable()
                    ->fields([
                        Text::make('Название для отображения', 'original_name')
                            ->required(),

                        File::make('Файл', 'file_path')
                            ->disk('public')
                            ->dir('documents')
                            ->allowedExtensions(['pdf', 'docx', 'pptx']),

                        Number::make('Порядок сортировки', 'sort_order')
                            ->default(0),
                    ]),
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
        return [
            'type' => ['required', 'in:study,extracurricular,additional'],
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'slug' => ['required', 'string', 'unique:activity_blocks,slug,' . $item->getKey()],
            'description' => ['nullable', 'string'],
            'assignment_text' => ['nullable', 'string'],
            'sort_order' => ['integer'],
        ];
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
