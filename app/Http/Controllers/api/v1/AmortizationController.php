<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AmortizationIndexRequest;
use App\Http\Resources\AmortizationResource;
use App\Services\AmortizationService;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class AmortizationController extends Controller
{

    public function __construct(
        public AmortizationService $amortizationService)
    { }

    /**
     * Display a listing of Amortization.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(AmortizationIndexRequest $request)
    {
        try {
            $amortizations = $this->amortizationService->getAllAmortizations($request);

            return AmortizationResource::collection($amortizations);
        } catch (QueryException $e) {
            Log::error('A database error occurred in the AmortizationController: '.$e->getMessage());

            return response()->json(['error' => 'A database error occurred.'], 500);
        } catch (\Exception $e) {
            Log::error('An error occurred in the AmortizationController: '.$e->getMessage());

            return response()->json(['error' => 'An error occurred.'], 500);
        }
    }
}
