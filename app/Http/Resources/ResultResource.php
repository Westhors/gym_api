<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResultResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,

            'title' => $this->title,
            'time' => $this->time,
            'count_kilograms' => $this->count_kilograms,
            'active' => $this->active,

            'imageUrl' => $this->getFirstMediaUrl(),
            'image' => new MediaResource($this->getFirstMedia()),

            'createdAt' => optional($this->created_at)->format('Y-M-d H:i:s A'),
            'updatedAt' => optional($this->updated_at)->format('Y-M-d H:i:s A'),
        ];
    }
}
