<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoappFormController;  // 追加


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/todo', [TodoappFormController::class, 'index']);
Route::get('/create-page', 'TodoappFormController::@createPage');
Route::post('/create', 'TodolistFormController@create');

