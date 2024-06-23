<?php

use App\Http\Controllers\API\LessonController;
use App\Http\Controllers\API\RelationController;
use App\Http\Controllers\API\TagController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1'], function () {
    Route::resource('lessons', LessonController::class);
    Route::resource('tags', TagController::class);
    Route::resource('users', UserController::class);

    Route::get('users/{id}/lessons', [RelationController::class, 'userLessons']);
    Route::get('lessons/{id}/tags', [RelationController::class, 'lessonTags']);
    Route::get('tags/{id}/lessons', [RelationController::class, 'tagLessons']);
});
