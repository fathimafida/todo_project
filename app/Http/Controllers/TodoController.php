<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{


    public function index()
    {
        // $todos = Todo::all();
        $todos = Todo::latest()->get();
        return view('todos.index',compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);
          Todo::create([
            'title' => $request->title,
            'description' => $request->description,
          ]);
        return redirect()->route('todoList')->with('success', 'Todo created successfully.');
    //   dd($request->all());
    }
}

