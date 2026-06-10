<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ActivityBlock\Pages;

use MoonShine\Laravel\Pages\Crud\IndexPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Components\Table\TableBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\QueryTags\QueryTag;
use MoonShine\UI\Components\Metrics\Wrapped\Metric;
use MoonShine\UI\Fields\ID;
use App\MoonShine\Resources\ActivityBlock\ActivityBlockResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Number;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Fields\Relationships\HasMany;
use App\MoonShine\Resources\Document\DocumentResource;
use Throwable;


/**
 * @extends IndexPage<ActivityBlockResource>
 */
class ActivityBlockIndexPage extends IndexPage
{
    protected bool $isLazy = true;

    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make()->sortable(),
            
            Text::make('Заголовок', 'title'),

            Select::make('Тип', 'type')
                ->options([
                    'study' => 'Учебная',
                    'extracurricular' => 'Внеурочная',
                    'additional' => 'Дополнительная',
                ])
                ->badge(fn($status) => match($status) {
                    'study' => 'purple',
                    'extracurricular' => 'blue',
                    'additional' => 'green',
                    default => 'gray'
                }),
            Select::make('Иконка', 'icon')
                ->options([
                    'study' => '🎓',
                    'extracurricular' => '⚙️',
                    'additional' => '🐢',
                ]),

            Slug::make('URL', 'slug'),

            Number::make('Порядок', 'sort_order')->sortable(),
            
            
        ];
    }

    /**
     * @return ListOf<ActionButtonContract>
     */
    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    /**
     * @return list<FieldContract>
     */
    protected function filters(): iterable
    {
        return [];
    }

    /**
     * @return list<QueryTag>
     */
    protected function queryTags(): array
    {
        return [];
    }

    /**
     * @return list<Metric>
     */
    protected function metrics(): array
    {
        return [];
    }

    /**
     * @param  TableBuilder  $component
     *
     * @return TableBuilder
     */
    protected function modifyListComponent(ComponentContract $component): ComponentContract
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
