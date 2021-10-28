<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CheckController;

Auth::routes([
    'reset' => false,
    'verify' => false,
    'confirm' => false
]);

Route::get('/', [CheckController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::post('check/create', [CheckController::class, 'create'])->name('check.create');
});
