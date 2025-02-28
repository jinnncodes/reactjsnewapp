<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskApiController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::post('/save-task', [TaskApiController::class, 'saveTask']);
Route::post('/save-task', [TaskApiController::class, 'saveTask']);
Route::get('/get-task-list', [TaskApiController::class, 'getAllTask']);
Route::put('/mark-as-done/{id}', [TaskApiController::class, 'markAsDone']);
Route::delete('/mark-as-delete/{id}', [TaskApiController::class, 'markAsDelete']);
