<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class layout extends Controller
{
    public function homepage()
    {
        return view('home');
    }

    public function todoList()
    {
        $todos = Todos::all();
        
        return view('todoList', ['todos' => $todos]);
    }

    public function newTodo()
    {
        return view('newtodo');
    }
}
