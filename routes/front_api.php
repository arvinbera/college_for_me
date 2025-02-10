<?php

use App\Http\Controllers\Frontend\FrontApiController;
use Illuminate\Support\Facades\Route;

Route::post('college/submit', [FrontApiController::class, 'submit_application']);
Route::post('college/claim', [FrontApiController::class, 'claim_application']);
