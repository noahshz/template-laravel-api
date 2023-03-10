<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilController;

// Route: "Not Found"
Route::fallback([UtilController::class, 'notfound'])
    // No Middleware!
;

// Route: "Status"
Route::get("/status", [UtilController::class, 'status'])
    // No Middleware!
;
