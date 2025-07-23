<?php

use App\Http\Controllers\Api\RandomNumberController;
use Illuminate\Support\Facades\Route;

Route::prefix('numbers')->group(function () {
    Route::post('/generate', [RandomNumberController::class, 'generate']);
    Route::get('/{id}', [RandomNumberController::class, 'retrieve']);
});
