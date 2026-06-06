<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Document\Pages;

use MoonShine\Laravel\Pages\Crud\DetailPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use App\MoonShine\Resources\Document\DocumentResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\BelongsTo;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Layout\Column;
use Throwable;


/**
 * @extends DetailPage<DocumentResource>
 */
class DocumentDetailPage extends DetailPage
{
    /**
     * @return list<FieldContract>
     */
protected function fields(): iterable
{
    return [
        ID::make(),
        Text::make('Активность', 'activityBlock.title'),
        Text::make('Название документа', 'original_name'),
        Text::make('Размер файла', 'file_size'),
        Text::make('Порядок сортировки', 'sort_order'),
        File::make('Файл', 'file_path')->disk('public'),
        Text::make('Дата создания', 'created_at'),
        Text::make('Дата обновления', 'updated_at'),
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
