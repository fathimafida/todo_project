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

    public function show(Request $request, Todo $todo)
    {
        // dd($id);
        // $todo = Todo::find($id);  inorder to simplify instead of passing id we can directly pass Todo $todo so in route also  we need to change it as todo instead of id
        return view('todos.show',compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit',compact('todo'));
    }
    // Here we use the Request object to validate the data sent from the form
    // The Request object is a facade provided by Laravel that allows us to interact with the current HTTP request
    // We use the validate method to check if the data sent from the form is valid according to the rules we define
    // In this case we check if the title and description are required and have a minimum length of 3 characters
    // If the validation fails, the user will be redirected back to the form with the errors
    // If the validation passes, we update the todo item with the new data
    // We use the update method provided by the Eloquent ORM to update the todo item
    // Finally we redirect the user back to the todo list page with a success message
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);
        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('todoList')->with('success', 'Todo updated successfully.');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todoList')->with('success', 'Todo deleted successfully.');
    }
}

