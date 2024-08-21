@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-3xl font-semibold mb-6 text-center">Todo Details</h2>

    <div class="mb-4">
        <h3 class="text-xl font-bold text-gray-800">Title:</h3>
        <p class="text-lg text-gray-600 mt-2">{{ $todo->title }}</p>
    </div>

    <div class="mb-4">
        <h3 class="text-xl font-bold text-gray-800">Description:</h3>
        <p class="text-lg text-gray-600 mt-2">{{ $todo->description }}</p>
    </div>

    {{-- <div class="flex justify-between items-center mt-6">
        <a href="{{ route('todos.edit', $todo->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-lg shadow-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">Edit</a>
        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400">Delete</button>
        </form>
    </div> --}}

    <div class="mt-6">
        <a href="{{ route('todoList') }}" class="text-indigo-600 hover:text-indigo-800">Back to Todo List</a>
    </div>
</div>
@endsection
