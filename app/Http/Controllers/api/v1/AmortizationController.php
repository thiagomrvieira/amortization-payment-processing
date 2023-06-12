<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\AmortizationResource;
use App\Models\Amortization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AmortizationController extends Controller
{
    /**
     * Display a listing of Amortization.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {

            return AmortizationResource::collection(
                Amortization::with('project.promoter')->paginate()
            );
        } catch (\Exception $e) {
            Log::error('An error occurred in the AmortizationController: '.$e->getMessage());

            return response()->json(['error' => 'An error occurred.'], 500);
        }
    }
}
