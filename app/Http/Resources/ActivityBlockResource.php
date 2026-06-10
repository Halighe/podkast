<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityBlockResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'slug' => $this->slug,
            'title' => $this->title,
            'icon' => $this->icon,
            'description' => $this->description,
            'assignment_text' => $this->assignment_text,
            'sort_order' => $this->sort_order,
            'documents' => DocumentResource::collection($this->whenLoaded('documents')),
        ];
    }
}