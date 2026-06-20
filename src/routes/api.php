<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Todo一覧を取得するAPI
Route::get('/todos', [TodoController::class, 'index']); // GET /api/todos

// 新しいTodoを作成するAPI
Route::post('/todos', [TodoController::class, 'store']); // POST /api/todos

// 指定したIDのTodoを削除するAPI
Route::delete('/todos/{id}', [TodoController::class, 'destroy']); // DELETE /api/todos/{id}
