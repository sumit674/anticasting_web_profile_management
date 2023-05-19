<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Shortlist\Http\Controllers\{ShortlistController,BucketController};


Route::group(['prefix' => 'admin','middleware'=>['web','admin']], function() {
    Route::get('shortlist',[ShortlistController::class,'index'])->name('admin.shortlist');
    // Route::get('shortlist/{id}/archive',[ShortlistController::class,'archive'])->name('admin.shortlist.archive');
    // Route::get('shortlist/{id}/active',[ShortlistController::class,'active'])->name('admin.shortlist.active');
    Route::post('project-member',[BucketController::class,'store'])->name('admin.project.member');
});


