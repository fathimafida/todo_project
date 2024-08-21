@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold mb-4">Todo List</h1>
        @if (session('success'))
            <p class="text-green-700 font-bold text-lg mb-4 border border-green-500 rounded-lg  p-2 bg-green-200">{{ session('success') }}</p>
        @endif
        <div class="flex flex-col gap-4">
            @foreach ($todos as $todo)
                <div class="p-4 rounded-lg border border-gray-200 shadow-sm flex flex-col justify-between">
                    <div class="flex justify-between">
                        <p>{{ $todo->title }}</p>
                        <div class="flex gap-2">
                            <a href="" class="px-2 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Edit</a>
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 text-red-500 hover:text-red-700">Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            <a href="{{ route('createTodo') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Create Todo</a>
        </div>
    </div>
@endsection

