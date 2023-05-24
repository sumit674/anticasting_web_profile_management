<?php

use Illuminate\Support\Facades\Route;
use App\Modules\EmailTempletes\Http\Controllers\EmailTempletesController;

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {
    Route::get('email-templetes', [EmailTempletesController::class,'index'])->name('admin.emailtempletes');
    Route::get('email-templetes/{id}/edit', [EmailTempletesController::class,'edit'])->name('admin.emailtempletes.edit');
    Route::post('email-templetes/{id}/update', [EmailTempletesController::class,'store'])->name('admin.emailtempletes.update');
});

