<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ActivityBlock\Pages;

use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\Contracts\UI\FieldContract;
use App\MoonShine\Resources\ActivityBlock\ActivityBlockResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\ID;
use Throwable;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Select;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Textarea;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Preview;

/**
 * @extends DetailPage<ActivityBlockResource>
 */
class ActivityBlockDetailPage extends DetailPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        // Прямой список полей БЕЗ Box
        return [
            ID::make(),

            Select::make('Тип направления', 'type')
                ->options([
                    'study' => 'Учебная деятельность',
                    'extracurricular' => 'Внеурочная деятельность',
                    'additional' => 'Дополнительная деятельность',
                ])
                ->badge(fn($status) => match($status) {
                    'study' => 'purple',
                    'extracurricular' => 'blue',
                    'additional' => 'green',
                    default => 'gray'
                }),

            Text::make('Заголовок', 'title'),

            Slug::make('URL (Slug)', 'slug'),

            Preview::make('Текст задания', 'assignment_text'),
            
            Preview::make('Текст задания', 'assignment_text'),

            Number::make('Порядок сортировки', 'sort_order'),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    /**
     * @param  TableBuilder  $component
     *
     * @return TableBuilder
     */
    protected function modifyDetailComponent(ComponentContract $component): ComponentContract
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
