<?php

use App\Http\Controllers\layout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;


Route::get('/', [layout::class, 'homepage']);
Route::get('/todo_list',[layout::class, 'todoList']);

Route::get('/new_todo',[layout::class, 'newTodo']);

Route::post('/register', [todoController::class, 'register']);