<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Edit Task
        </h2>
    </x-slot>

    <div class="py-10">

        <div class="max-w-3xl mx-auto">

            <div class="bg-pink shadow-lg rounded-xl p-6">

                <form action="{{ route('tasks.update', $task) }}" method="POST">

                    @csrf
                    @method('PUT')

                    {{-- Task Title --}}
                    <div class="mb-4">

                        <label class="block text-gray-700 mb-2">
                            Task Title
                        </label>

                        <input type="text"
                               name="title"
                               value="{{ $task->title }}"
                               class="w-full border rounded-lg p-3">

                        @error('title')
                            <p class="text-red-500 mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Buttons --}}
                    <div class="flex gap-3">

                        <button type="submit"
                                class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-lg">
                            Update Task
                        </button>

                        <a href="{{ route('tasks.index') }}"
                           class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">
                            Back
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>