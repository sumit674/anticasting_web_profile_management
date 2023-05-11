<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Project\Http\Controllers\{ProjectController};

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {
    Route::get('project', [ProjectController::class, 'index'])->name('admin.projects');
    Route::get('project/create', [ProjectController::class, 'createProject'])->name('admin.projects.create');
    Route::post('project-store', [ProjectController::class, 'storeProject'])->name('admin.projects.store');
    Route::get('project/edit/{id}', [ProjectController::class, 'editProject'])->name('admin.projects.edit');
    Route::post('project/edit/{id}/update', [ProjectController::class, 'updateProject'])->name('admin.projects.update');
    Route::get('project/delete/{id}', [ProjectController::class, 'deleteProject'])->name('admin.projects.delete');
    Route::post('project/archived', [ProjectController::class, 'archiveProject'])->name('admin.projects.archived');
});
