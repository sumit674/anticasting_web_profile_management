<?php

use App\Modules\Actors\Http\Controllers\{ActorsController, ManageActorController, BucketController};
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {

    Route::any('actors', [ActorsController::class, 'listActors'])->name('admin.actors');
    Route::get('actors/{id}/detail', [ActorsController::class, 'actorDetail'])->name('admin.actors.detail');
    Route::get('actors/{id}/video', [ActorsController::class, 'actorVideo'])->name('admin.actors.video');
    Route::get('filter-actors', [ActorsController::class, 'filterActorList'])->name('admin.filter-actors');
    Route::get('list-actors', [ManageActorController::class, 'actorList'])->name('admin.actors.mange');
    Route::get('list-actors/create', [ManageActorController::class, 'ActorCreate'])->name('admin.actors.mange.create');
    Route::post('list-actors/store', [ManageActorController::class, 'ActorStroe'])->name('admin.actors.mange.store');
    Route::get('list-actors/{id}/edit', [ManageActorController::class, 'ActorEdit'])->name('admin.actors.mange.edit');
    Route::get('list-actors/{id}/details', [ManageActorController::class, 'ActorDetails'])->name('admin.actors.mange.details');
    Route::get('list-actors/{id}/new-details', [ActorsController::class, 'actorNewDetails'])->name('admin.actors.mange.new-details');
    Route::post('list-actors/{id}/update', [ManageActorController::class, 'ActorUpdate'])->name('admin.actors.mange.update');
    Route::get('list-actors/{id}/delete', [ManageActorController::class, 'ActorDelete'])->name('admin.actors.mange.delete');
    Route::get('list-actors/{id}/delete', [ManageActorController::class, 'ActorDelete'])->name('admin.actors.mange.delete');

    Route::post('get-child-categories', [ActorsController::class, 'fetchChildrenCategories'])->name('admin.actors.get-child-categories');
    /*Actor Details Page */
    Route::get('/profile/{id}', [ActorsController::class, 'actorProfileDetails'])->name('admin.profile-detail');
    Route::get('/rating', [ActorsController::class, 'actorRating'])->name('admin.rating');
    Route::get('/rating-rating-star', [ActorsController::class, 'actorRemoveRatingStar'])->name('admin.rating.remove');
    /*Send Broadcast email */
    Route::post('/send-email',[ActorsController::class,'actorSendBroadcastEmail'])->name('admin.broadcast');

});

