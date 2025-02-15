<?php

use App\Http\Controllers\Frontend\FrontApiController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\Route;

Route::post('college/submit', [FrontApiController::class, 'submit_application']);
Route::post('college/claim', [FrontApiController::class, 'claim_application']);
Route::get('college/search/{key}', [SearchController::class, 'header_search']);
Route::get('college/filter_search/', [SearchController::class, 'college_filter_search']);
