<?php

use App\Professional\Presentation\Http\Controllers\ProfileController;
use App\Professional\Presentation\Http\Controllers\SessionController;
use App\Professional\Presentation\Http\Controllers\WorkspaceController;
use App\ProfessionalOperations\Presentation\Http\Controllers\ClientController;
use App\ProfessionalOperations\Presentation\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

    Route::get('/workspace', [WorkspaceController::class, 'show'])->name('workspace');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::prefix('clients')->name('clients.')->group(function () {
        Route::get('/', [ClientController::class, 'index'])->name('index');
        Route::get('/create', [ClientController::class, 'create'])->name('create');
        Route::post('/', [ClientController::class, 'store'])->name('store');
        Route::get('/{client}', [ClientController::class, 'show'])->name('show');

        Route::prefix('{client}/projects')->name('projects.')->group(function () {
            Route::get('/create', [ProjectController::class, 'create'])->name('create');
            Route::post('/', [ProjectController::class, 'store'])->name('store');
            Route::get('/{project}', [ProjectController::class, 'show'])->name('show');
            Route::post('/{project}/activate', [ProjectController::class, 'activate'])->name('activate');
            Route::post('/{project}/hold', [ProjectController::class, 'hold'])->name('hold');
            Route::post('/{project}/archive', [ProjectController::class, 'archive'])->name('archive');
        });
    });
});
