<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id ?? null,

            'title' => $this->title ?? null,
            'time' => $this->time ?? null,
            'price' => $this->price ?? null,
            'description' => $this->description ?? null,
            'active' => $this->active ?? null,

            'createdAt' => $this->created_at ? $this->created_at->format('Y-M-d H:i:s A') : null,
            'updatedAt' => $this->updated_at ? $this->updated_at->format('Y-M-d H:i:s A') : null,
        ];
    }
}
