<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PodcastResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'vk_url' => $this->vk_url,
            'cover_image' => $this->cover_image ? asset('storage/' . $this->cover_image) : null,
            'sort_order' => $this->sort_order,
            'created_at' => $this->created_at->format('d.m.Y'),
        ];
    }
}
