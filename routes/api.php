<?php

use App\Http\Controllers\Api\V1\AmortizationController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::get('/amortizations', [AmortizationController::class, 'index']);
});
