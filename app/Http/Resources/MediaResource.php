<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MediaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'title'        => $this->title,
            'category'     => $this->category,
            'genres'       => $this->genres,
            'rating'       => $this->rating,
            'synopsis'     => $this->synopsis,
            'length'       => $this->unit_count . ' ' . $this->unit_label,
            'action_label' => $this->action_label,
            'users'        => UserResource::collection($this->whenLoaded('users')),
        ];
    }
}
