<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ActivityBlock extends Model
{
    protected $fillable = ['type', 'slug', 'title', 'description', 'assignment_text', 'sort_order'];

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class)->orderBy('sort_order');
    }
}
