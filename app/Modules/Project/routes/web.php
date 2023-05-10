<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Project\Http\Controllers\{ProjectController};

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {
    Route::get('project', [ProjectController::class, 'index'])->name('admin.projects');
    Route::get('project/create', [ProjectController::class, 'createProject'])->name('admin.projects.create');
    Route::post('project-store', [ProjectController::class, 'storeProject'])->name('admin.projects.store');
    Route::get('project/edit/{id}', [ProjectController::class, 'editProject'])->name('admin.projects.edit');
});
