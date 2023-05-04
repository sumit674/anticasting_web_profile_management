<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {
    Route::get('bucket', 'BucketController@index')->name('admin.bucket.manage');
    Route::get('bucket/create', 'BucketController@create')->name('admin.bucket.manage.create');
    Route::post('bucket/store', 'BucketController@store')->name('admin.bucket.manage.store');
    Route::get('bucket/{id}/edit', 'BucketController@edit')->name('admin.bucket.manage.edit');
    Route::get('bucket/{id}/details', 'BucketController@details')->name('admin.bucket.manage.details');
    Route::post('bucket/{id}/update', 'BucketController@update')->name('admin.bucket.manage.update');
    Route::get('bucket/{id}/delete', 'BucketController@delete')->name('admin.bucket.manage.delete');
    Route::get('bucket-member/archive/{id?}/{bId?}', 'BucketController@archive')->name('admin.bucket.member.archive');
    Route::post('bucket-member/{bId}/archive-selected', 'BucketController@archiveBulk')->name('admin.bucket.member.archiveBulk');
    Route::get('bucket-member/unarchive/{id?}/{bId?}', 'BucketController@unArchive')->name('admin.bucket.member.unarchive');
});

