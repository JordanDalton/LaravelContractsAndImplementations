<?php

use Illuminate\Support\Facades\Route;

Route::get('dvr/play', [\App\Http\Controllers\DvrController::class, 'play']);
Route::get('dvr/pause', [\App\Http\Controllers\DvrController::class, 'pause']);

Route::get('dvr/play/honeywell', [\App\Http\Controllers\HoneywellController::class, 'play']);
Route::get('dvr/pause/honewell', [\App\Http\Controllers\HoneywellController::class, 'pause']);

Route::get('dvr/play/haydon', [\App\Http\Controllers\HaydonController::class, 'play']);
Route::get('dvr/pause/haydon', [\App\Http\Controllers\HaydonController::class, 'pause']);

