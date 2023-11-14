<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoappFormController;  // 追加


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [TodoappFormController::class, 'index']);
Route::get('/create-page', [TodoappFormController::class, 'createPage']);
Route::post('/create', [TodoappFormController::class, 'create']);
Route::get('/edit-page/{id}', [TodoappFormController::class, 'editPage']);
Route::post('/edit', [TodoappFormController::class, 'edit']);
Route::get('/delete-page/{id}', [TodoappFormController::class, 'deletePage']);
Route::get('/delete/{id}', [TodoappFormController::class, 'delete']);