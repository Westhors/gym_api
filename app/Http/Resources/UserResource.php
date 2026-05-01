<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id ?? null,
            'name' => $this->name ?? null,
            'role' => $this->role ?? null,
            'email' => $this->email ?? null,
            'phone' => $this->phone ?? null,
            'age' => $this->age ?? null,

            'weight' => $this->weight ?? null,
            'height' => $this->height ?? null,
            'goal' => $this->goal ?? null,
            'training_level' => $this->training_level ?? null,
            'your_daily_life' =>  $this->styleyour_daily_lifestyle ?? null,
            'avalid_problem' => $this->avalid_problem ?? null,


            'number_of_meals' => $this->number_of_meals ?? null,
            'water_intake' => $this->water_intake ?? null,
            'dietary_supplements' => $this->dietary_supplements ?? null,
            'number_of_hours_per_day' => $this->number_of_hours_per_day ?? null,

            'sleep_quality' => $this->sleep_quality ?? null,
            'stress_level' => $this->stress_level ?? null,
            'note' => $this->note ?? null,
            'package' => new PackageResource($this->package),

            'createdAt' => $this->created_at ? $this->created_at->format('Y-M-d H:i:s A') : null,
            'updatedAt' => $this->updated_at ? $this->updated_at->format('Y-M-d H:i:s A') : null,
        ];
    }
}


















