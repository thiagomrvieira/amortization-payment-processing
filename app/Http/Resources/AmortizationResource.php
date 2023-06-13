<?php

namespace App\Http\Resources;

use Carbon\Carbon;
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
            'schedule_date' => Carbon::parse($this->schedule_date)->format('d-m-Y'),
            'paid_at' => $this->state === 'paid' ? Carbon::parse($this->schedule_date)->diffForHumans() : null,
            'state' => $this->state,
            'amount' => number_format($this->amount, 2, ',', '.'),
            'project' => new ProjectResource($this->project),
        ];
    }
}
