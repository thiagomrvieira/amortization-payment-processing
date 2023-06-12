<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AmortizationResource extends JsonResource
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
            'schedule_date' => $this->schedule_date,
            'amount' => number_format($this->amount,2,",","."),
            'project' => new ProjectResource($this->project),
        ];
    }
}
