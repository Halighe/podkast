<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    protected $fillable = ['activity_block_id', 'file_path', 'original_name', 'file_size', 'sort_order'];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if ($model->isDirty('file_path') && $model->file_path) {
                if (Storage::disk('public')->exists($model->file_path)) {
                    $model->file_size = Storage::disk('public')->size($model->file_path);
                }
            }
        });
    }

    public function activityBlock()
    {
        return $this->belongsTo(ActivityBlock::class);
    }
}
