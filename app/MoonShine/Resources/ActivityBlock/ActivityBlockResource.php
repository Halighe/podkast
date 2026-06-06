<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ActivityBlock;

use Illuminate\Database\Eloquent\Model;
use App\Models\ActivityBlock;
use App\MoonShine\Resources\ActivityBlock\Pages\ActivityBlockIndexPage;
use App\MoonShine\Resources\ActivityBlock\Pages\ActivityBlockFormPage;
use App\MoonShine\Resources\ActivityBlock\Pages\ActivityBlockDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<ActivityBlock, ActivityBlockIndexPage, ActivityBlockFormPage, ActivityBlockDetailPage>
 */
class ActivityBlockResource extends ModelResource
{
    protected string $model = ActivityBlock::class;

    protected string $title = 'Активности';
    protected string $column = 'title';
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ActivityBlockIndexPage::class,
            ActivityBlockFormPage::class,
            ActivityBlockDetailPage::class,
        ];
    }
}
