<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Podcast\Pages;

use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use App\MoonShine\Resources\Podcast\PodcastResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Components\Layout\Box;
use Throwable;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Url;

/**
 * @extends FormPage<PodcastResource>
 */
class PodcastFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                
                Text::make('Заголовок', 'title')
                    ->placeholder('Введите название подкаста')
                    ->required(),

                Url::make('Ссылка VK', 'vk_url')
                    ->placeholder('https://vk.com/...')
                    ->required(),

                Image::make('Обложка', 'cover_image')
                    ->disk('public') 
                    ->dir('podcasts')
                    ->allowedExtensions(['jpg', 'png', 'jpeg', 'webp']),

                Number::make('Порядок сортировки', 'sort_order')
                    ->default(0)
                    ->buttons()
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
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'vk_url' => [
                'required', 
                'url', 
                'regex:/^(https?:\/\/)?(www\.)?(vk\.com|vk\.ru|vkvideo\.ru)\/.+$/i'
            ],
            
            'cover_image' => [
                $item->exists ? 'nullable' : 'required', 
                'image', 
                'max:2048'
            ],
            
            'sort_order' => ['nullable', 'integer'],
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
