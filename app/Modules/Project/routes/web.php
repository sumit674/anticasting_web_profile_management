<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Project\Http\Controllers\{ProjectController,CharacterController};

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {
    Route::get('project', [ProjectController::class, 'index'])->name('admin.projects');
    Route::get('project/create', [ProjectController::class, 'createProject'])->name('admin.projects.create');
    Route::post('project-store', [ProjectController::class, 'storeProject'])->name('admin.projects.store');
    Route::get('project/edit/{id}', [ProjectController::class, 'editProject'])->name('admin.projects.edit');
    Route::post('project/edit/{id}/update', [ProjectController::class, 'updateProject'])->name('admin.projects.update');
    // Route::get('project/delete/{id}', [ProjectController::class, 'deleteProject'])->name('admin.projects.delete');
    Route::get('project/{id}/archive', [ProjectController::class, 'archive'])->name('admin.projects.archive');
    Route::get('project/{id}/active', [ProjectController::class, 'active'])->name('admin.projects.active');
    /* Project Character */
    Route::get('character/{id}', [CharacterController::class, 'listCharacter'])->name('admin.character');
    Route::get('project/{id}/character/create', [CharacterController::class, 'createCharacter'])->name('admin.character.create');
    Route::post('project/{id}/character/store', [CharacterController::class, 'storeCharacter'])->name('admin.character.store');
    Route::get('project/{pId}/{id}/character/edit', [CharacterController::class, 'editCharacter'])->name('admin.character.edit');
    Route::post('project/{pId}/{id}/character/update', [CharacterController::class, 'updateCharacter'])->name('admin.character.update');
    Route::get('project/{pId}/{id}/character/delete', [CharacterController::class, 'deleteCharacter'])->name('admin.character.delete');
});
