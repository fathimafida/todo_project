<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('todoList');
Route::get('/todos/create', [TodoController::class, 'create'])->name('createTodo');
Route::post('/todos/store', [TodoController::class, 'store'])->name('storeTodo');

