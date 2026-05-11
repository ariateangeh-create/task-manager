<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Task Manager
        </h2>
    </x-slot>

    <div class="py-10">

        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-lg rounded-xl p-6">

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Title + Button --}}
                <div class="flex justify-between items-center mb-6">

                    <h1 class="text-3xl font-bold text-gray-800">
                        My Tasks
                    </h1>

                    <a href="{{ route('tasks.create') }}"
                       class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg">
                        + Add Task
                    </a>

                </div>

                {{-- Tasks --}}
                @forelse ($tasks as $task)

                    <div class="bg-gray-100 hover:bg-gray-200 transition p-4 rounded-lg mb-4 flex justify-between items-center">

                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">
                                {{ $task->title }}
                            </h2>
                        </div>

                        <div class="flex gap-2">

                            {{-- Edit --}}
                            <a href="{{ route('tasks.edit', $task) }}"
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                                Edit
                            </a>

                            {{-- Delete --}}
                            <form action="{{ route('tasks.destroy', $task) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        onclick="return confirm('Delete this task?')"
                                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                                    Delete
                                </button>

                            </form>

                        </div>

                    </div>

                @empty

                    <div class="bg-gray-100 p-6 rounded text-center text-gray-500">
                        No tasks yet.
                    </div>

                @endforelse

            </div>

        </div>

    </div>

</x-app-layout>