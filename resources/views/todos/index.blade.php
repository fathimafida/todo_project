@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold mb-4">Todo List</h1>
        @if (session('success'))
            <p class="text-green-700 font-bold text-lg mb-4 border border-green-500 rounded-lg  p-2 bg-green-200">{{ session('success') }}</p>
        @endif
        <div class="flex flex-col gap-4">
            @foreach ($todos as $todo)
                <x-todos.todo-card :todo="$todo" />
            @endforeach
        </div>
        <div class="mt-4">
            <a href="{{ route('createTodo') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Create Todo</a>
        </div>
    </div>
@endsection

