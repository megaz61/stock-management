api:
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;

Route::prefix('products')->group(function () {
    Route::get('/', [ProductApiController::class, 'index']);
    Route::post('/', [ProductApiController::class, 'store']);
    Route::get('/{product}', [ProductApiController::class, 'show']);
    Route::put('/{product}', [ProductApiController::class, 'update']);
    Route::delete('/{product}', [ProductApiController::class, 'destroy']);
});
