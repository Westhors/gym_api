<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrainingResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id ?? null,

            'name' => $this->name ?? null,
            'coache_game_settings' => $this->coache_game_settings ?? null,
            'user_game_settings' => $this->user_game_settings ?? null,
            'day_training' => $this->day_training ?? null,
            'active' => $this->active ?? null,

            'imageUrl' => $this->getFirstMediaUrl(),
            'image' => new MediaResource($this->getFirstMedia()),
            'videoUrl' => $this->getFirstMediaUrl('video'),
            'video' => new MediaResource($this->getFirstMedia('video')),
            'user' => new PackageResource($this->user),

            'createdAt' => $this->created_at ? $this->created_at->format('Y-M-d H:i:s A') : null,
            'updatedAt' => $this->updated_at ? $this->updated_at->format('Y-M-d H:i:s A') : null,
        ];
    }
}
