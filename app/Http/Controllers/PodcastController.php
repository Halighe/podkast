<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\PodcastStoreRequest;
use App\Http\Resources\PodcastResource;
use App\Models\Podcast;
use Illuminate\Support\Facades\Storage;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::orderBy('sort_order')->get();
        return PodcastResource::collection($podcasts);
    }

    public function store(PodcastStoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('podcasts', 'public');
        }

        $podcast = Podcast::create($data);
        return new PodcastResource($podcast);
    }

    public function show(Podcast $podcast)
    {
        return new PodcastResource($podcast);
    }

    public function destroy(Podcast $podcast)
    {
        if ($podcast->cover_image) {
            Storage::disk('public')->delete($podcast->cover_image);
        }
        
        $podcast->delete();
        return response()->json(['message' => 'Удалено'], 204);
    }
}