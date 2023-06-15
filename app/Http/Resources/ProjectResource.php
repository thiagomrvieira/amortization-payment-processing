<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => strlen($this->description) > 60 ?
                                substr($this->description, 0, 60).'...' :
                                $this->description,
            'promoter' => new PromoterResource($this->promoter),
        ];
    }
}
