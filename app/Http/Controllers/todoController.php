<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'todo' =>'required|max:255',    
        ]);
        $incomingFields['completed'] = false;
        Todos::create($incomingFields);
        return redirect('/');
    }
    
}
