<div class="p-4 rounded-lg border border-gray-200 shadow-sm flex flex-col justify-between">
    <div class="flex justify-between">
        <a href="{{ route('showTodo', $todo->id) }}" class="text-xl font-semibold">{{ $todo->title }}</a>
        <div class="flex gap-2">
            <a href="{{route('editTodo',$todo->id) }}" class="px-2 py-1 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Edit</a>
            <form action="{{route('destroyTodo', $todo->id)}}" method="POST" onsubmit="return confirm('Are you sure?')">
                @csrf

                @method('DELETE')
                <button type="submit" class="px-2 py-1 text-red-500 hover:text-red-700">Delete</button>
            </form>

        </div>
    </div>
</div>
