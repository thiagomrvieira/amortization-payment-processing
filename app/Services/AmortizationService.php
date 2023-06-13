<?php

namespace App\Services;

use App\Http\Requests\AmortizationIndexRequest;
use App\Models\Amortization;
use Illuminate\Pagination\LengthAwarePaginator;

class AmortizationService
{
    /**
     * Get all amortizations with pagination and sorting.
     *
     * @param  AmortizationIndexRequest  $request The request object containing the parameters for pagination and sorting.
     */
    public function getAllAmortizations(AmortizationIndexRequest $request): LengthAwarePaginator
    {
        return Amortization::with('project.promoter')
            ->orderBy(
                $request->input('sort_column', 'id'),
                $request->input('sort_direction', 'asc')
            )->paginate(
                $request->input('per_page', 10)
            );
    }
}
