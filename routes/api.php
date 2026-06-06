<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ActivityBlockController;

Route::apiResource('podcasts', PodcastController::class);

Route::prefix('activities')->group(function () {
    Route::get('/', [ActivityBlockController::class, 'index']); 
    Route::get('/{type}', [ActivityBlockController::class, 'getByType']);
});

 