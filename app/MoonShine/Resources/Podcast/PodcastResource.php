<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Podcast;

use Illuminate\Database\Eloquent\Model;
use App\Models\Podcast;
use App\MoonShine\Resources\Podcast\Pages\PodcastIndexPage;
use App\MoonShine\Resources\Podcast\Pages\PodcastFormPage;
use App\MoonShine\Resources\Podcast\Pages\PodcastDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Podcast, PodcastIndexPage, PodcastFormPage, PodcastDetailPage>
 */
class PodcastResource extends ModelResource
{
    protected string $model = Podcast::class;

    protected string $title = 'Подкасты';
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            PodcastIndexPage::class,
            PodcastFormPage::class,
            PodcastDetailPage::class,
        ];
    }
}
