<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Shortlist\Http\Controllers\{ShortlistController, BucketController};


Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {

    Route::get('shortlist', [ShortlistController::class, 'index'])->name('admin.shortlist');
    Route::get('show-profile-member/{cId}', [ShortlistController::class, 'allProfileMember'])->name('admin.show.allMember');
    Route::get('shortlist/{id}/archive', [ShortlistController::class, 'archive'])->name('admin.shortlist.archive');
    Route::get('shortlist/{id}/active', [ShortlistController::class, 'active'])->name('admin.shortlist.active');
    Route::get('breakdown/{pCId}/{id}/activated', [ShortlistController::class, 'activatedCharacter'])->name('admin.breakdown.activated');
    Route::get('breakdown/{pCId}/{id}/active', [ShortlistController::class, 'activeCharacter'])->name('admin.breakdown.active');
    Route::get('project-breakdown/{id}', [ShortlistController::class, 'characterList'])->name('admin.character.breakdown');
    Route::post('project-member', [BucketController::class, 'store'])->name('admin.project.member');
    Route::get('profile-member/send-email', [ShortlistController::class, 'sendEmailProfileMember'])->name('admin.sendEmail');
    Route::get('member-delete/{cId}/{id}',[ShortlistController::class,'destoryProjectMember'])->name('admin.member.delete');

});
